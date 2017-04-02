<?php

namespace App;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['id', 'create_at', 'qty', 'total', 'dia_chi_giao', 'product_id', 'customer_id', 'status'];

    public function orderItems() {
        return $this->belongsToMany(Product::class->withPivot('qty', 'total'));
    }

//    public static function createOrder() {
//        $customer = Customer::all();
//        $order = $customer->orders()->create([
//            'total' => Cart::total(),
//            'delivered' => 0
//        ]);
//
//        $cartItems = Cart::content();
//        foreach ( $cartItems as $cartItem) {
//            $order->orderItems()->attach($cartItem->id,[
//                'qty' => $cartItem->qty,
//                'total' => $cartItem->qty*$cartItem->price
//            ]);
//        }
//    }
}
