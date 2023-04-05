<?php

namespace App\Repositories\Cart;

interface CartInterface
{
    public function getCustomerCart($custId);
}
