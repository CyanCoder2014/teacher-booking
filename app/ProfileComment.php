<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileComment extends Model
{
    protected $fillable=['user_id','profile_id','parent_id','name','comment','email','approved','ban','rate'];

    public function getNameAttribute(){
        if(isset($this->user_id) && isset($this->user->name))
            return $this->user->name;
        return $this->attributes['name']??null;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function profile(){
        return $this->belongsTo(UserProfile::class);
    }

    public static function laratablesCustomAction($record){
        return view('admin.comment.action',['id'=>$record->id,'type' => 'profile'])->render();
    }
    public function  laratablesApproved(){
        switch ($this->approved){
            case 0: return 'not Approved';
            case 1: return 'Approved';
        }
    }
    public function  laratablesName(){
        return $this->name;
    }
    public static function  laratablesCustomReference($record){
        return '<a href="'.$record->profile->link().'">'.$record->profile->user->name.'</a>';
    }

    public static function laratablesQueryConditions($query)
    {
        return $query->addselect('profile_id','user_id','id','comment','approved');
    }

}
