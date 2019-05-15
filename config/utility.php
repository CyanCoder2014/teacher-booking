<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'names' => [
        'setting' => 'General setting',
        'banner'=> 'Banner',
        'contact' => 'Contact',
        'intro' => 'Intro',
        'footer_title' => 'Footer titles',
        'footer_1' => 'Footer 1',
        'footer_2' => 'Footer 2',
        'about_us' => 'About us',


    ],
    'types' => ['setting','banner','contact','intro','footer_title','footer_1','footer_2','about_us'],
    'forms' => [             //  name       type            label
        'setting' => [
                        'title_en' => ['type'=>'text','label'=>' Site name','class'=>null,'style'=>null,'values' => array()],
                        'title_sw' => ['type'=>'text','label'=>' Site name sweden','class'=>null,'style'=>null,'values' => array()],
//
                        'image' => ['type'=>'file','label'=>' Logo','class'=>null,'style'=>null,'values' => array()],
//
                        'about_us_en' => ['type'=>'textarea','label'=>'About us','class'=>'ckeditor','style'=>null,'values' => array()],
                        'about_us_sw' => ['type'=>'textarea','label'=>'About us sweden','class'=>'ckeditor','style'=>null,'values' => array()],
        ],



        'banner' => [
            'title_en' => ['type'=>'text','label'=>'Title ','class'=>null,'style'=>null,'values' => array()],
            'title_sw' => ['type'=>'text','label'=>'Title sweden','class'=>null,'style'=>null,'values' => array()],
            'image' => ['type'=>'file','label'=>'Image','class'=>null,'style'=>null,'values' => array()],
             'description_en' => ['type'=>'text','label'=>' Intro','class'=>null,'style'=>null,'values' => array()],
             'description_sw' => ['type'=>'text','label'=>' Intro sweden','class'=>null,'style'=>null,'values' => array()],
             'link' => ['type'=>'text','label'=>'Link','class'=>null,'style'=>null,'values' => array()],
        ],

        'contact' => [
            'email' => ['type'=>'text','label'=>' Email','class'=>null,'style'=>null,'values' => array()],
            'phone' => ['type'=>'text','label'=>' Tell','class'=>null,'style'=>null,'values' => array()],
            'mobile' => ['type'=>'text','label'=>' Mobile','class'=>null,'style'=>null,'values' => array()],
            'address_en' => ['type'=>'text','label'=>'Address','class'=>null,'style'=>null,'values' => array()],
            'address_sw' => ['type'=>'text','label'=>'Address','class'=>null,'style'=>null,'values' => array()],
            'twitter_link' => ['type'=>'text','label'=>' twitter','class'=>null,'style'=>null,'values' => array()],
            'linkedin_link' => ['type'=>'text','label'=>' linkedin','class'=>null,'style'=>null,'values' => array()],
            'instagram_link' => ['type'=>'text','label'=>'Instagram ','class'=>null,'style'=>null,'values' => array()],
            'Telegram_link' => ['type'=>'text','label'=>'Telegram ','class'=>null,'style'=>null,'values' => array()]
        ],


        'intro' => [
//
                        'image' => ['type'=>'file','label'=>'Image','class'=>null,'style'=>null,'values' => array()],
                        'description_en' => ['type'=>'text','label'=>' Intro ','class'=>null,'style'=>null,'values' => array()],
                        'description_sw' => ['type'=>'text','label'=>'sweden Intro','class'=>null,'style'=>null,'values' => array()],
                        'link' => ['type'=>'text','label'=>'link','class'=>null,'style'=>null,'values' => array()],
        ],


        'footer_title' => [
                        'title_1_en' => ['type'=>'text','label'=>'Footer 1  ','class'=>null,'style'=>null,'values' => array()],
                        'title_1_sw' => ['type'=>'text','label'=>'Footer 1 sweden ','class'=>null,'style'=>null,'values' => array()],
                        'title_2_en' => ['type'=>'text','label'=>'Footer 2  ','class'=>null,'style'=>null,'values' => array()],
                        'title_2_sw' => ['type'=>'text','label'=>'Footer 2 sweden ','class'=>null,'style'=>null,'values' => array()],

        ],
        'footer_1' =>   [  'title_en' => ['type'=>'text','label'=>'title','class'=>null,'style'=>null,'values' => array()],
                        'title_sw' => ['type'=>'text','label'=>'title sweden','class'=>null,'style'=>null,'values' => array()],

            'link' => ['type'=>'text','label'=>'link','class'=>null,'style'=>null,'values' => array()],
        ],
        'footer_2' =>   [  'title_en' => ['type'=>'text','label'=>'title','class'=>null,'style'=>null,'values' => array()],
                        'title_sw' => ['type'=>'text','label'=>'title sweden','class'=>null,'style'=>null,'values' => array()],

            'link' => ['type'=>'text','label'=>'link','class'=>null,'style'=>null,'values' => array()],
        ],

         'about_us' => [
    'title_en' => ['type'=>'text','label'=>'Title ','class'=>null,'style'=>null,'values' => array()],
    'title_sw' => ['type'=>'text','label'=>'Title sweden','class'=>null,'style'=>null,'values' => array()],
//
    'lable_en' => ['type'=>'text','label'=>'label','class'=>null,'style'=>null,'values' => array()],
    'lable_sw' => ['type'=>'text','label'=>'label sweden ','class'=>null,'style'=>null,'values' => array()],
//
    'about_us_en' => ['type'=>'textarea','label'=>'  about us','class'=>'ckeditor','style'=>null,'values' => array()],
    'about_us_sw' => ['type'=>'text','label'=>'about us   sweden ','class'=>null,'style'=>null,'values' => array()],
]

    ],
    'addable' => [


        'setting' => false,
        'banner'=> false,
        'contact' => false,
        'intro' => false,
        'footer_title' => false,
        'footer_1' => true,
        'footer_2' => true,
        'about_us' => false,

    ]



];
