<?php

namespace App\Services\Cart;

use App\Models\Cart;
use App\Models\Item;

class AddToCartService
{
    public function add(array $data)
    {
        try {
            $item = Item::where('id', $data['item_id'])->first();

            $cart = Cart::firstOrNew([
                'customer_id' => $data['customer_id'],
                'item_id' => $data['item_id'],
            ]);

            $cart->qty = $cart->qty + $data['qty'];
            $cart->price = $item->price;
            $cart->discount = 0;
            $cart->total = $cart->qty * $item->price;
            $cart->save();
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }

        return true;
    }
}
