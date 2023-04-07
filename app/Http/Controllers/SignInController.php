<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function index(){        
        return view('signin');
    }
    public function signin(Request $request){        
        return view('signin');
    }
}
