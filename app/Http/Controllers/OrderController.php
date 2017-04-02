<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;

class OrderController extends Controller
{
        public function Order() {
            Order::createOrder();
            return "ok";
        }
}
