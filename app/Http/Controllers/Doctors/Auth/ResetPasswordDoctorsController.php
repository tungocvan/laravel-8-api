<?php

namespace App\Http\Controllers\Doctors\Auth;
use Illuminate\Foundation\Auth\ResetsPasswords;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetPasswordDoctorsController extends Controller
{
    //
    use ResetsPasswords;
    protected $redirectTo = '/doctors';

    protected function validationErrorMessages(){
        return [
            'token.required' => 'Token không được để trống',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email phải đúng định dạng',
            'password.required' => 'Mật khẩu không được để trống',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp',
            'token.required' => 'Mật khẩu mới phải từ :min ký tự'
        ];
    }

    protected function rules(){
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => ['required','confirmed','min:8']
        ];
    }

    public function showResetForm(Request $request)
    {
        $token = $request->route()->parameter('token');

        return view('doctors.auth.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
