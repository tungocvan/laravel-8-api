<?php

namespace App\Http\Controllers\Doctors\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    // 
    use SendsPasswordResetEmails;
    public function getForgotPassword(){
        return view('doctors.auth.forgot-password');
    }

    public function sendResetLinkEmail(Request $request){
       $this->validateEmail($request);
       $response = $this->broker()->sendResetLink(
        $this->credentials($request)
       );

        return $response == Password::RESET_LINK_SENT
                    ? $this->sendResetLinkResponse($request, $response)
                    : $this->sendResetLinkFailedResponse($request, $response);
    }

    protected function validateEmail(Request $request){
        $request->validate([
            'email' => 'required|email',
            [
                'email.required' => 'Email bắt buộc phải nhập',
                'email.email' => 'Email không đúng định dạng'
            ]
        ]);
    }

    public function broker()
    {
        return Password::broker('doctors');
    }
}
