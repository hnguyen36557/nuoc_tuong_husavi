<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShipController extends Controller
{
    public function getProfile() {
        return view('layouts.client.customer_profile');
    }
}
