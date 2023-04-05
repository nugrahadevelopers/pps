<?php

namespace App\Services\Customer;

use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class DeleteCustomerService
{
    public function delete(Customer $customer)
    {
        DB::beginTransaction();
        try {
            $customer->user()->delete();
            $customer->delete();
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th->getMessage());
        }

        DB::commit();
        return true;
    }
}
