<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentComment extends Model
{
    protected $fillable=['user_id','content_id','parent_id','name','comment','email','approved','ban','rate'];

    public function getNameAttribute(){
        if(isset($this->user_id) && isset($this->user->name))
            return $this->user->name;
        return $this->attributes['name']??null;
    }

    public function user(){
        return $this->belongsTo(User::class)->withDefault(function ($instance) {
            return new \stdClass;
        });
    }
    public function content(){
        return $this->belongsTo(Content::class)->withDefault(function ($instance) {
            return new \stdClass;
        });
    }

    public static function laratablesCustomAction($record){
        return view('admin.comment.action',['id'=>$record->id,'type' => 'content'])->render();
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
        return '<a href="'.$record->content->link().'">'.$record->content->title.'</a>';
    }

    public static function laratablesQueryConditions($query)
    {
        return $query->addselect('content_id','user_id','id','comment','approved');
    }
}
