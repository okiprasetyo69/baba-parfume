<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function resellerOrderPerfume(Request $request){
        return view("orders.reseller.perfume");
    }
    public function resellerOrderSupportItem(Request $request){
        return view("orders.reseller.support");
    }
}
