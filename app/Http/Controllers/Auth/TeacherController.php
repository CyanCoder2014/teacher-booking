<?php

namespace App\Http\Controllers\Auth;

use App\Mail\VerifyMail;
use App\Notifications\VerifyEmail;
use App\VerifyUser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class TeacherController extends Controller
{
    public function send(){

        $user = Auth::user();
        if(!isset($user->verifyUser))
            $user->verifyUser = VerifyUser::create([
                'user_id' => $user->id,
                'token' => str_random(40)
            ]);
        $user->notify(new VerifyEmail());
//        Mail::to(Auth::user()->email)->send(new VerifyMail(Auth::user()));
        return view('auth.verify');
    }
    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verify_at) {
                $verifyUser->user->verify_at = Carbon::now();
                $verifyUser->user->save();
                $status = "Your e-mail is verified.";
            }else{
                $status = "Your e-mail is already verified.";
            }
        }else{
            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
        }

        return redirect('/profile/edit')->with('message', $status);

    }
}
