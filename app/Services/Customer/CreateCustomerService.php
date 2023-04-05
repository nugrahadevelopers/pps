<?php

namespace App\Services\Customer;

use App\Enums\UserRole;
use App\Models\Customer;
use App\Services\User\CreateUserService;
use Illuminate\Support\Facades\DB;

class CreateCustomerService
{
    protected $createUserService;

    public function __construct(CreateUserService $createUserService)
    {
        $this->createUserService = $createUserService;
    }

    public function create(array $data): Customer
    {
        DB::beginTransaction();
        try {
            $user = $this->createUserService->create(array_merge($data, ['password' => 'password', 'roles' => [UserRole::CUSTOMER->value]]));
            $customer = Customer::create([
                'name' => $data['name'],
                'address' => $data['address'],
                'phone' => $data['phone'],
                'user_id' => $user->id,
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th->getMessage());
        }

        DB::commit();
        return $customer;
    }
}
