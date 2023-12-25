<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralManagerController extends Controller
{
    public function index(Request $request)
    {
        return view('user.general-manager.index');
    }
}
