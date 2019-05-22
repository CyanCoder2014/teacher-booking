<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Category extends CRUD
{
    protected $fillable = ['lang_id','title','parent_id','image','intro'];
    protected static $name='Category';
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
            'name' => 'category',
            'slug' => 'Parent',
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
            'name' => 'lang_id',
            'type' => 'select',
            'slug' => 'Language',
            'values' => 'App\Language,id,name',
            'validation' => 'required',
        ],
        [
            'name' => 'parent_id',
            'type' => 'select',
            'slug' => 'Parent',
            'values' => 'App\Category,id,title',
            'validation' => '',
        ],
        [
            'name' => 'image',
            'type' => 'image',
            'slug' => 'Image',
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
    static $url_prefix='category';
    static $middleware=['admin'];

//    public static function ACL($method,$record=null):bool{
//        if ($method == 'edit' or $method == 'update' or $method == 'destroy')
//        {
//            if(isset($record->user_id) && $record->user_id == Auth::id())
//                return true;
//            return false;
//        }
//        return true;
//    }

//    public static function laratablesQueryConditions($query)
//    {
//        return $query->where('user_id', Auth::id());
//    }

//    public function category(){
//        return $this->belongsTo(Category::class);
//    }
    public static function LaratablesCustomCategory($record){
        if($record->category)
            return $record->category->title;
        return 'none';
    }

//    public function lang(){
//        return $this->belongsTo(Language::class);
//    }
    public function link(){
        return route('filter',['categories[]' =>$this->id]);
    }
}
