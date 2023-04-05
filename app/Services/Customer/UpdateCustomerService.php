<?php

namespace App\Services\Customer;

use App\Models\Customer;
use App\Services\User\UpdateUserService;
use Illuminate\Support\Facades\DB;

class UpdateCustomerService
{
    protected $updateUserService;

    public function __construct(UpdateUserService $updateUserService)
    {
        $this->updateUserService = $updateUserService;
    }

    public function update(Customer $customer, array $data): Customer
    {
        DB::beginTransaction();
        try {
            $customer->update([
                'name' => $data['name'],
                'address' => $data['address'],
                'phone' => $data['phone'],
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th->getMessage());
        }

        DB::commit();
        return $customer;
    }
}
