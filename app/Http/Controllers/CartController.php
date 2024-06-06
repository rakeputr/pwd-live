<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $carts = collect(session()->get('cart'));

        $cartIds = $carts->map(function ($cart) {
            return $cart["id"];
        });

        $results = Product::whereIn('ProductID', $cartIds)->get();

        $results = $results->map(function ($cart, $key) use ($carts) {
            return [
                "id" => $cart->ProductID,
                "name" => $cart->ProductName,
                "amount" => $carts[$key]["amount"],
                "totalPrice" => $cart->UnitPrice * $carts[$key]["amount"]
            ];
        });

        $grandTotal = $results->sum('totalPrice');

        return view("show-cart", [
            "carts" => $results,
            "grandTotal" => $grandTotal
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->only(['id', 'amount']);

        if ($request->session()->has('cart')) {
            $carts = $request->session()->get('cart');

            $found = false;
            foreach ($carts as $key => $cart) {
                if ($data["id"] == $cart["id"]) {
                    $carts[$key]["amount"] += $data["amount"];
                    $found = true;
                }
            }

            if (!$found) {
                $carts[] = $data;
            }

            $request->session()->put("cart", $carts);
        } else {
            $request->session()->put('cart', [$data]);
        }

        return redirect()->route('cart.get');
    }
}
