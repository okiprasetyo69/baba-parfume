<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stockPerfumeReseller(Request $request){
        return view("stocks.reseller.perfume");
    }
    public function stockSupportItemReseller(Request $request){
        return view("stocks.reseller.support");
    }
    public function changeVariansPerfumeReseller(Request $request){
        return view("stocks.reseller.change_varians");
    }
}
