<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CourseRequest extends CRUD
{
    protected static $name ='فعالیت روزانه';
    protected $fillable=['name','description','daymin','weekmin','date','cat_id','active','user_id',];
    static $tablefields = [
        [
            'name' => 'id',
            'slug' => 'number',
            'orderable' => true,
            'searchable' => true,
        ],
        [
            'name' => 'name',
            'slug' => 'نام',
            'orderable' => true,
            'searchable' => true,
        ],
        [
            'name' => 'date',
            'slug' => 'تاریخ شروع',
            'orderable' => true,
            'searchable' => true,
        ],
        [
            'name' => 'active',
            'slug' => 'فعالیت در حال حاظر',
            'orderable' => true,
            'searchable' => true,
        ],
        [
            'name' => 'cat_id',
            'slug' => 'دسته بندی',
            'orderable' => true,
            'searchable' => true,
        ],
        [
            'name' => 'action',
            'slug' => 'اعمال',
            'orderable' => false,
            'searchable' => false,
        ]

    ];
    static $crud =[
        [
            'name'=> 'name',
            'type' => 'text',
            'slug' => 'نام ورزش',
            'validation' => 'required',
        ],
        [
            'name'=> 'description',
            'type' => 'textarea',
            'slug' => 'توضیحات',
            'validation' => 'required'
        ],
        [
            'name'=> 'daymin',
            'type' => 'number',
            'slug' => 'دقیقه در روز',
            'validation' => 'required'
        ],
        [
            'name'=> 'weekmin',
            'type' => 'number',
            'slug' => 'دقیقه در هفته',
            'validation' => 'required'
        ],
        [
            'name'=> 'date',
            'type' => 'date',
            'slug' => 'تاریخ شروع',
            'validation' => 'required'
        ],
        [
            'name'=> 'cat_id',
            'type' => 'select',
            'slug' => 'دسته بندی',
            'values' =>[0 => 'سبک',1 => 'متوسط',2 => 'سنگین'],
            'validation' => 'required'
        ],
        [
            'name'=> 'active',
            'type' => 'checkbox',
            'slug' => 'فعالیت در حال حاضر',
            'validation' => 'required'
        ],
        [
            'name' => 'user_id',
            'type' => 'null',
            'slug' => 'آی دی',
            'default' => true,
            'validation' => ''
        ]
    ];
    static $method_access=[
        'index' => true,
        'create' => true,
        'store' => true,
        'edit' => true,
        'update' => true,
        'destroy' => true,
        'show' => true,
    ];
    static $url_prefix='useractivity';
    static $middleware=['auth'];

    public function default_user_id(){
        if(isset($this->user_id))
            return $this->user_id;
        return Auth::id();
    }
    public static function laratablesQueryConditions($query)
    {
        return $query->where('user_id', Auth::id());
    }

}
