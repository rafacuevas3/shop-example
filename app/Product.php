<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public static function getByCode($code)
    {
        try {
            return Product::where('code', $code)->firstOrFail();
        } catch (ModelNotFoundException $e) {
            return redirect('product/not-found');
        }
    }
}
