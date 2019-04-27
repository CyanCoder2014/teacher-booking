<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable=['gender','education','intro','type','category_id','state_id','city_id','address','tell','hourly_rate','skills','image','intro_video','birth','lat','lng'];
//    protected $casts=[
//
//    ]

    protected $genderType = [
        'man','woman'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function link(){
        return route('profile.show',['userProfile' => $this->id]);
    }
    public function image(){
        if (isset($this->image))
            return asset($this->image);
        return asset('/user.png');
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function state(){
        return $this->belongsTo(Province::class);
    }
    public function gender(){

        return $this->genderType[$this->gender]??'unknown';
    }
    public function courses(){
        return $this->hasMany(Course::class,'user_id','user_id');
    }
    public function comment(){
        return $this->hasMany(ProfileComment::class,'profile_id');
    }
    public function AcceptedComment(){
        return $this->comment()->where('approved',1);
    }
}
