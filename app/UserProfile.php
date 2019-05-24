<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable=['subject','education','intro','type','category_id','state_id','city','tell','image','intro_video','availablity','languages','lat','lng'];
    protected $casts=[
        'type' => 'array',
        'languages' => 'array',
    ];

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
        return $this->belongsTo(City::class)->withDefault(function ($instance) {
            return new City();
        });
    }
    public function state(){
        return $this->belongsTo(Province::class)->withDefault(function ($instance) {
            return new Province();
        });
    }
    public function category(){
        return $this->belongsTo(Category::class)->withDefault(function ($instance) {
            return new Category();
        });
    }
    public function gender(){

        return $this->genderType[$this->gender]??'unknown';
    }
    public function AVGrate(){

        if ($this->AcceptedComment->avg('rate') != null)
            round($this->AcceptedComment->avg('rate'),1);
        else
        $this->AcceptedComment->avg('rate');

    }
    public function courses(){
        return $this->hasMany(Course::class,'user_id','user_id');
    }
    public function comment(){
        return $this->hasMany(ProfileComment::class,'profile_id');
    }
    public function AcceptedComment(){
        return $this->comment();//->where('approved',1);
    }

    public static function laratablesCustomAction($record){
        return view('admin.profile.action',['userProfile'=>$record->id])->render();
    }

    public function getLocationAttribute()
    {
        return [
            'lat' => $this->lat,
            'lng' => $this->lng,
        ];
    }

}
