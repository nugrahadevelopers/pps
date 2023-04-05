<?php

namespace App\Repositories\Cart;

use App\Models\Cart;

class CartRepository implements CartInterface
{
    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function getCustomerCart($custId)
    {
        $cart = $this->cart->where('customer_id', $custId)->orderBy('created_at', 'DESC')->get();
        return $cart;
    }
}
