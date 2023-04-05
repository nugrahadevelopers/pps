<?php

namespace App\Services\Transaction\Sales;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class CreateOrderService
{
    public function create(array $data)
    {
        DB::beginTransaction();
        try {
            $customer = Customer::where('id', $data['customer_id'])->first();

            $order = Order::create([
                'code'          => $data['code'],
                'date'          => now(),
                'customer_id'   => $data['customer_id'],
                'customer_name' => $customer->name,
                'phone'         => $customer->phone,
                'address'       => $customer->address,
                'subtotal'      => $data['subtotal'],
                'discount'      => $data['discount'],
                'total'         => $data['total'],
            ]);

            foreach ($customer->carts as $cart) {
                $order->orderItems()->create([
                    'order_code' => $order->code,
                    'item_id'    => $cart->item->id,
                    'item_name'  => $cart->item->name,
                    'qty'        => $cart->qty,
                    'price'      => $cart->price,
                    'discount'   => $cart->discount,
                    'total'      => $cart->total,
                    'note'       => '',
                ]);
            }

            $customer->carts()->delete();
        } catch (\Throwable $th) {
            DB::rollBack();
            dd($th->getMessage());
        }

        DB::commit();
        return true;
    }
}
