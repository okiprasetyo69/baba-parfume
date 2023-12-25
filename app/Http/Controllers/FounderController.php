<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FounderController extends Controller
{
    public function index(Request $request)
    {
        return view('user.founder.index');
    }
}
