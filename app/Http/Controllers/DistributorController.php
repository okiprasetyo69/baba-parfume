<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistributorController extends Controller
{
    public function index(Request $request)
    {
        return view('user.distributor.index');
    }
}
