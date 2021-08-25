<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sale extends Controller
{
    public function viewCart(){

    	return view('sale.cart');
    }

    public function viewCheckout(){

    	return view('sale.checkout');
    }

    public function thankYou(){

    	return view('sale.thankyou');
    }


}
