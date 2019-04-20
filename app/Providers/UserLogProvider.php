<?php

namespace App\Providers;

use App\UserLog;
use \Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class UserLogProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {


    }
    public static function initiate(){
        $user = UserLog::User();
        if (!$user){
            if(Auth::check())
                $user = UserLog::where('user_id',Auth::id())->first();
            else
                $user = UserLog::IpAddress(Request::ip())->first();
            if (!$user)
                $user = UserLog::make(Request::ip(),Auth::id());

            UserLog::makeCookie($user);
        }
    }
}
