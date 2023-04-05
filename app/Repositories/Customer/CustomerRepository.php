<?php

namespace App\Repositories\Customer;

use App\Models\Customer;

class CustomerRepository implements CustomerInterface
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function getAll()
    {
        $data = $this->customer
            ->with('user')
            ->when(request()->search, function ($query) {
                if (!is_array(request()->search)) {
                    $query->where('name', 'LIKE', '%' . request()->search . '%');
                }
            })
            ->orderBy('created_at', 'DESC');

        return $data->get();
    }
}
