<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable=['gender','education','intro','state_id','city_id','address','tell','hourly_rate','skills','image','intro_video','birth'];
//    protected $casts=[
//
//    ]
}
