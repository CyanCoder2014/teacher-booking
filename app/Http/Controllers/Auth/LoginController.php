<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\UserLog;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
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
    protected function authenticated(Request $request,$user)
    {
        if ($user->type = 0)
        {
            Auth::logout();
            return back()->with('message','you Baned from Admin use contact us to send message');
        }
        $user_log= UserLog::User();
        if(!isset($user_log) or // cookie not exist or corrupted
            (isset($user_log->user_id) and $user_log->user_id != $user->id) // another user logged in with same cookie
        ){
            $user_log = UserLog::make($request->ip(),$user->id);
            UserLog::makeCookie($user_log);
        }
    }
}
