<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Auth;
use Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = RouteServiceProvider::ADMIN;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function facebookCallback()
    {
        $userFacebook = Socialite::driver('facebook')->user();
        //dd($user);
        $providerId = $userFacebook->getId();
        $provider = 'facebook';
        $user = User::where('provider',$provider)->where('provider_id',$providerId)->first();
        if(!$user){
            $user = new User();
            $user->name = $userFacebook->getName();
            $user->email = $userFacebook->getEmail();
            $user->provider_id = $providerId;
            $user->provider = $provider;
            $user->password = Hash::make(rand());
            $user->save();
        }
        $userId = $user->id;
        Auth::loginUsingId($userId);
        return redirect($this->redirectTo);
    }
    public function googleCallback()
    {
        $userGoogle = Socialite::driver('google')->user();
        //dd($user);
        $providerId = $userGoogle->getId();
        $provider = 'google';
        $user = User::where('provider',$provider)->where('provider_id',$providerId)->first();
        if(!$user){
            $user = new User();
            $user->name = $userGoogle->getName();
            $user->email = $userGoogle->getEmail();
            $user->provider_id = $providerId;
            $user->provider = $provider;
            $user->password = Hash::make(rand());
            $user->save();
        }
        $userId = $user->id;
        Auth::loginUsingId($userId);
        return redirect($this->redirectTo);
    }
    
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string|email',
            'password' => 'required|string|min:6',
        ],[
            $this->username().'.required' => 'Tên đăng nhập bắt buộc phải nhập',
            $this->username().'.string' => 'Tên đăng nhập không hợp lệ',        
            $this->username().'.email' => 'Tên đăng nhập không phải là email',     
            'password.required' => 'Mật khẩu bắt buộc phải nhập',   
            'password.min' => 'Mật khẩu phải có ít nhất :min ký tự'
        ]);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => ['Tên đăng nhập hoặc mật khẩu không hợp lệ.'],
        ]);
    }
}
