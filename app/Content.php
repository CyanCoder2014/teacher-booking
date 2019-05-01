<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Content extends CRUD
{
    protected $fillable = ['active','user_id','category_id','lang_id','title','intro','text','type','image','image_b'];
    protected static $name='content';
    protected static $layout='admin';
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
            'name' => 'intro',
            'slug' => 'Introduction',
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
            'name' => 'active',
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
            'type' => 'textarea',
            'slug' => 'Introduction',
            'validation' => 'required',
        ],
        [
            'name' => 'text',
            'type' => 'ckeditor',
            'slug' => 'Text',
            'validation' => 'required',
        ],
        [
            'name' => 'lang_id',
            'type' => 'select',
            'slug' => 'Language',
            'values' => 'App\Language,id,name',
            'validation' => 'required',
        ],
        [
            'name' => 'category_id',
            'type' => 'select',
            'slug' => 'Category',
            'values' => 'App\Category,id,title',
            'validation' => 'required',
        ],
        [
            'name' => 'image',
            'type' => 'image',
            'slug' => 'Image',
            'validation' => 'required',
        ],
        [
            'name' => 'image_b',
            'type' => 'image',
            'slug' => 'Image 2',
            'validation' => 'required',
        ]
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
    static $url_prefix='content';
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
    protected function default_created_by(){
        return Auth::id();
    }
    protected function default_active(){
        return 0;
    }
    protected function default_status(){
        return 0;
    }
//    public static function laratablesQueryConditions($query)
//    {
//        return $query->where('user_id', Auth::id());
//    }

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
        return route('blog.show',['content' => $this->id]);
    }
}
