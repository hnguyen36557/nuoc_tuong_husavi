<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

use App\Http\Requests;

class CustomerController extends Controller
{
    public function shipping() {
        return view('layouts.client.customer_profile');
    }
    public function postShipping(Request $request) {
        $customer = new Customer();
        $customer->name = $request->customer_name;
        $customer->email = $request->customer_email;
        $customer->phone = $request->customer_phone;
        $customer->address = $request->address;

        $customer->save();

        return redirect()->back();
    }


}
