<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class Course extends CRUD
{
    protected $fillable = ['user_id','category_id','title','intro','weekly_schedule','type','hourly_price','total_price','capacity','image','intro_video'];
    protected static $name='Courses';
    protected static $layout='layout';
    protected static $tablefields=[

        [
            'name' => 'id',
            'slug' => '#',
            'orderable' => true,
            'searchable' => true,
        ],
        [
            'name' => 'title',
            'slug' => 'Title',
            'orderable' => true,
            'searchable' => true,
        ],
        [
            'name' => 'category.title',
            'slug' => 'Category',
            'orderable' => true,
            'searchable' => true,
        ],
        [
            'name' => 'type',
            'slug' => 'Type',
            'orderable' => false,
            'searchable' => false,
        ],
        [
            'name' => 'action',
            'slug' => 'Action',
            'orderable' => false,
            'searchable' => false,
        ]

    ];
    protected static $crud=[
        [
            'name' => 'user_id',
            'type' => 'null',
            'default' => true
        ],
        [
            'name' => 'title',
            'type' => 'text',
            'slug' => 'Title',
            'validation' => 'required',
        ],
        [
            'name' => 'intro',
            'type' => 'ckeditor',
            'slug' => 'Introduction',
            'validation' => 'required',
        ],
//        [
//            'name' => 'lang_id',
//            'type' => 'select',
//            'slug' => 'Language',
//            'values' => 'App\Language,id,name',
//            'validation' => 'required',
//        ],
        [
            'name' => 'category_id',
            'type' => 'select',
            'slug' => 'Category',
            'values' => 'App\Category,id,title',
            'validation' => 'required',
        ],
        [
            'name' => 'type',
            'type' => 'select',
            'slug' => 'Type',
            'values' => ['private','group','online'],
            'validation' => 'required',
        ],
        [
            'name' => 'weekly_schedule',
            'type' => 'tags',
            'slug' => 'Weekly Schedule',
            'values' => ['monday','tuesday','wensday','thursday','friday','saturday','sunday'],
            'validation' => 'required',
        ],
        [
            'name' => 'hourly_price',
            'type' => 'number',
            'slug' => 'hourly Rate',
            'validation' => 'required',
        ],
        [
            'name' => 'total_price',
            'type' => 'number',
            'slug' => 'Total Price',
            'validation' => 'required',
        ],
        [
            'name' => 'capacity',
            'type' => 'number',
            'slug' => 'Capacity',
            'validation' => 'required',
        ],
        [
            'name' => 'image',
            'type' => 'file',
            'slug' => 'Image',
            'validation' => '',
        ],
        [
            'name' => 'intro_video',
            'type' => 'file',
            'slug' => 'Introduction Video',
            'validation' => '',
        ],
    ];
    static $method_access=[
        'index' => true,
        'create' => true,
        'store' => true,
        'edit' => true,
        'update' => true,
        'destroy' => true,
        'show' => false,
        'condition' => true,
    ];
    static $url_prefix='myCourses';
    static $middleware=['auth'];

    public static function ACL($method,$record=null):bool{

        if (!isset(Auth::user()->profile))
            return false;
        if (($method == 'edit' or $method == 'update' or $method == 'destroy'))
        {
            if(isset($record->user_id) && $record->user_id == Auth::id())
                return true;
            return false;
        }
        return true;
    }

    protected function default_user_id(){
        return Auth::id();
    }
    protected function default_created_by(){
        return Auth::id();
    }
    protected function default_approved(){
        return 0;
    }
    protected function default_status(){
        return 0;
    }
    public static function laratablesQueryConditions($query)
    {
        return $query->where('user_id', Auth::id());
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function LaratablesType(){
        return $this->type();
    }

//    public function lang(){
//        return $this->belongsTo(Language::class);
//    }
    public function link(){
        return '#';
    }
    public static function ACL_Failed_Message($method,$record=null){
        switch ($method){
            case 'index':return 'You should Fill your Profile'; break;
        }
        return parent::ACL_Failed_Message($method,$record);
    }
    public static function ACL_Failed_redirect($method, $record = null)
    {
        switch ($method){
            case 'index':return route('profile'); break;
        }

        return parent::ACL_Failed_redirect($method, $record);
    }
}
