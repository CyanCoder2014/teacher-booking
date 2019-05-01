<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ContactUs extends Model
{
    protected $fillable=['name','email','subject','message','status'];
    use Notifiable;

    /**
     * Route notifications for the mail channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForMail($notification)
    {
        return $this->email;
    }
    public static function laratablesCustomAction($record){
        return view('admin.contactus.action',['contactUs'=>$record->id])->render();
    }
    public function  laratablesStatus(){
        switch ($this->status){
            case 0: return 'waiting';
            case 1: return 'replied';
        }
    }
}
