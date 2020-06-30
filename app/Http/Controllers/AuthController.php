<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome2 (Request $request)
    {
        $namadepan = $request->input('namadepan');
        $namabelakang = $request->input('namabelakang');
        return view('welcome2', compact('namadepan','namabelakang'));
        // return "$first_name & $last_name";
    }

}


