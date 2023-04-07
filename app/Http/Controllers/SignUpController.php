<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index(){        
        return view('signup');
    }
    public function signin(Request $request){        
        return view('signup');
    }
}
 