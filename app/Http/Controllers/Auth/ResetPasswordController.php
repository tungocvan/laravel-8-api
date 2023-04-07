<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /** 
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
       protected $redirectTo = RouteServiceProvider::ADMIN;
       //protected $redirectTo = '/';

   
    protected function validationErrorMessages(){
        return [
            'token.required' => 'Token không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email phải đúng định dạng',
            'password.required' => 'Mật khẩu không được để trống',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp',
            'password.min' => 'Mật khẩu mới phải từ :min ký tự',
        ];
    }

    protected function rules(){
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => ['required','confirmed','min:6']
        ];
    }

    public function showResetForm(Request $request)
    {
        $uri = explode('?',$request->post('token'));     
        $token = $uri[0];
        $email = str_replace('email=','',$uri[1]);        
        return view('auth.passwords.reset')->with(
            ['token' => $token, 'email' => $email]
        );
    }
}
