<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileComment extends Model
{
    protected $fillable=['user_id','profile_id','parent_id','name','email','approved','ban','rate'];

    public function getNameAttribute(){
        if(isset($this->user_id) && isset($this->user->name))
            return $this->user->name;
        return $this->attributes['name']??null;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
