<?php

namespace App\Http\Controllers\Panel\Admin\Cart;

use App\Http\Controllers\Controller;
use App\Http\Resources\Cart\CartResource;
use App\Repositories\Cart\CartInterface;
use App\Services\Cart\AddToCartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    protected $cartInterface;

    public function __construct(CartInterface $cartInterface)
    {
        $this->cartInterface = $cartInterface;
    }

    public function getCustomerCart($custId)
    {
        $cart = $this->cartInterface->getCustomerCart($custId);
        return CartResource::collection($cart);
    }

    public function addToCart(Request $request, AddToCartService $addToCartService)
    {
        $addToCartService->add($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Berhasil menambahkan item ke keranjang.',
        ]);
    }
}
