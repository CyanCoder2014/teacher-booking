<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class UserLog extends Model
{

    public function getIpAddressAttribute($value)
    {
        return inet_ntop($value);
    }

    public function setIpAddressAttribute($value)
    {
        $this->attributes['ip_address'] = inet_pton($value);
    }

    public static function IpAddress($ip){
        return static::where('ip_address',inet_pton($ip));
    }

    public static function User(){
        $cookie = Cookie::get('user_info');
        if ($cookie){
//            $cookie = Crypt::decrypt($cookie);
            $cookie =explode('-',$cookie);
            if (isset($cookie[1]) and ctype_digit($cookie[1]))
                return static::find($cookie[1]);
        }
        return null;
    }
    public static function id(){
        $cookie = Cookie::get('user_info');
        if ($cookie){
//            $cookie = Crypt::decrypt($cookie);
            $cookie =explode('-',$cookie);
            if (isset($cookie[1]) and ctype_digit($cookie[1]))
                return $cookie[1];
        }
        return null;
    }
    public static function make($ip , $user_id = null){
        $user = new static();
        $user->ip_address = $ip;
        if(isset($user_id))
            $user->user_id = $user_id;
        $user->save();
        return $user;
    }
    public static function makeCookie(UserLog $user){
        return Cookie::queue(Cookie::make('user_info',  Str::random(12).'-'.$user->id));
    }
}
