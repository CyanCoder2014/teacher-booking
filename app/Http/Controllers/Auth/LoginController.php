<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\UserLog;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        if(!session()->has('url.intended'))
        {
            session(['url.intended' => url()->previous()]);
        }
        return view('auth.login');
    }
    protected function authenticated(Request $request, $user)
    {
        $user_log= UserLog::User();
        if(!isset($user_log) or // cookie not exist or corrupted
            (isset($user_log->user_id) and $user_log->user_id != $user->id) // another user logged in with same cookie
        ){
            $user_log = UserLog::make(Request::ip(),$user->id);
            UserLog::makeCookie($user_log);
        }
    }
}
