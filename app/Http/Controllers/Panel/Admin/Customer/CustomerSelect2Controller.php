<?php

namespace App\Http\Controllers\Panel\Admin\Customer;

use App\Http\Controllers\Controller;
use App\Repositories\Customer\CustomerInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CustomerSelect2Controller extends Controller
{
    protected $customerInterface;

    public function __construct(CustomerInterface $customerInterface)
    {
        $this->customerInterface = $customerInterface;
    }

    public function getAll(Request $request)
    {
        $customers = $this->customerInterface->getAll();
        $select2_data = new Collection();

        foreach ($customers as $customer) {
            $select2_data->push(['id' => $customer->id, 'text' => $customer->name]);
        }

        return response()->json($select2_data);
    }
}
