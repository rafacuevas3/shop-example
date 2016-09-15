<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class CartController extends Controller
{
    public function add($code, $quantity = 1)
    {
        try {
            $product = Product::getByCode($code);
        } catch (ModelNotFoundException $e) {
            return redirect('product/not-found');
        }

        \Cart::add($code, $product->name, $quantity, $product->price);

        return redirect('/');
    }

    public function remove($id)
    {
        \Cart::remove($id);
        if (\Cart::count() == 0) {
            return redirect('/');
        }
        return redirect('/cart/details');
    }

    public function details()
    {
        if (\Cart::count() == 0) {
            return redirect('/');
        }

        return view('cart.details');
    }

    public function trash()
    {
        \Cart::destroy();
        return redirect('/');
    }

    public function product_not_found_exception()
    {
        return view('products.not_found');
    }

    public function product_details($code)
    {
        return view('products.details')->with('product', Product::getByCode($code));
    }
}
