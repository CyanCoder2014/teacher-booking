<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CourseRequest extends CRUD
{
    protected $fillable = ['lang_id','user_id','category_id','title','intro','approved','type','status','created_by','updated_by'];
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
            'name' => 'category.name',
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
            'name' => 'lang_id',
            'type' => 'null',
            'default' => true
        ],
        [
            'name' => 'user_id',
            'type' => 'null',
            'default' => true
        ],
        [
            'name' => 'approved',
            'type' => 'null',
            'default' => true
        ],
        [
            'name' => 'status',
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
        [
            'name' => 'type',
            'type' => 'select',
            'slug' => 'Type',
            'values' => ['type1','type2','type3'],
            'validation' => 'required',
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
    static $url_prefix='myCourseRequests';
    static $middleware=['auth'];

    public static function ACL($method,$record=null):bool{
        if ($method == 'edit' or $method == 'update' or $method == 'destroy')
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
    protected function default_lang_id(){
        return 1;
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

}
