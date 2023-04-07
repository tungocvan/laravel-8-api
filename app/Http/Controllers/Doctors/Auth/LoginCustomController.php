<?php

namespace App\Http\Controllers\Doctors\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Providers\RouteServiceProvider;

class LoginCustomController extends Controller
{
    //
    public function login(){
        return view('doctors.auth.login');
        //return 'Login'; 
    }
    public function postLogin(Request $request){
        //dd($request->all());
        //dd($request->except('_token'));
        
        $dataLogin = $request->except('_token','remember');
        //dd($dataLogin);
        if(isDoctorActive($dataLogin['email'])){
            $checkLogin =  Auth::guard('doctor')->attempt($dataLogin);
            if($checkLogin){
               return redirect(RouteServiceProvider::DOCTOR);
            }
            return back()->with('msg','Email hoặc mật khẩu không hợp lệ');
        }
        return back()->with('msg','Tài khoản chưa được kích hoạt');
    }
}
