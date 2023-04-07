<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotController extends Controller
{
    public function index(){        
        return view('forgot');
    }
    public function signin(Request $request){        
        return view('forgot');
    }
}
