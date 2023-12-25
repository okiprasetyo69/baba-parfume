<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function transactionPerfumeReseller(Request $request){
        return view("transactions.reseller.perfume");
    }
}
