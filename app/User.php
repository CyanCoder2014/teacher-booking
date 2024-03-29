<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type','mobile','network','state_id','city_id','created_by','updated_by'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','activated_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses(){
        return $this->hasMany(Course::class);
    }
    public function profile(){
        return $this->hasOne(UserProfile::class);
    }
    public function isAdmin(){
        if ($this->type == 1)
            return true;
        return false;
    }
    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }
    public function type(){
        switch ($this->type){
            case 0: return 'Baned';
            case 1: return 'Admin';
            case 2: return 'User';
        }
    }
    public function routeNotificationForMail($notification)
    {
        return $this->email;
    }
}
