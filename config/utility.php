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
        'setting' => 'تنظیمات سایت',
        'slider'=> 'اسلایدشو',
        'contact' => 'تماس با ما',
        'banner1' => 'بنر 1 صفحه اول',
        'banner2' => 'بنر 2 صفحه اول',
        'footer_title' => 'عنوان فوترها',
        'footer_1' => 'فوتر اول',
        'footer_2' => 'فوتر دوم',
        'footer_3' => 'فوتر سوم',
        'footer_4' => 'فوتر چهارم',
        'factor' => 'تنظیمات فاکتور',
        'service1' => 'خدمات',
        'number' => 'عدد های داخل سایت',
        'about_us' => 'درباره ما',


    ],
    'types' => ['setting','about_us','number','service1','slider','contact','banner1','banner2','footer_title','footer_1','footer_2','footer_3','footer_4','factor'],
    'forms' => [             //  name       type            label
        'setting' => [
//                        'title_fa' => ['type'=>'text','label'=>'نام سایت فارسی','class'=>null,'style'=>null,'values' => array()],
                        'title' => ['type'=>'text','label'=>'نام سایت','class'=>null,'style'=>null,'values' => array()],
//                        'name1_fa' => ['type'=>'text','label'=>'قسمت اول نام شرکت فارسی','class'=>null,'style'=>null,'values' => array()],
//                        'name2_fa' => ['type'=>'text','label'=>'قسمت دوم نام شرکت فارسی','class'=>null,'style'=>null,'values' => array()],
//                        'name1' => ['type'=>'text','label'=>'قسمت اول نام شرکت انگی','class'=>null,'style'=>null,'values' => array()],
//                        'name2' => ['type'=>'text','label'=>'قسمت دوم نام شرکت فارسی','class'=>null,'style'=>null,'values' => array()],
                        'image' => ['type'=>'file','label'=>'لوگو شرکت','class'=>null,'style'=>null,'values' => array()],
//                        'banner' => ['type'=>'file','label'=>'بنر بالای صفحه','class'=>null,'style'=>null,'values' => array()],
//                        'banner1' => ['type'=>'file','label'=>'بنر 1','class'=>null,'style'=>null,'values' => array()],
//                        'banner2' => ['type'=>'file','label'=>'بنر 2','class'=>null,'style'=>null,'values' => array()],
                        'about_us' => ['type'=>'textarea','label'=>'درباره ما فوتر','class'=>'ckeditor','style'=>null,'values' => array()],
//                        'about_us_fa' => ['type'=>'text','label'=>'درباره ما فوتر فارسی','class'=>null,'style'=>null,'values' => array()],
        ],
        'about_us' => [
                        'title_fa' => ['type'=>'text','label'=>'تیتر فارسی','class'=>null,'style'=>null,'values' => array()],
            'title' => ['type'=>'text','label'=>'تیتر انگلیسی','class'=>null,'style'=>null,'values' => array()],
//                        'name1_fa' => ['type'=>'text','label'=>'قسمت اول نام شرکت فارسی','class'=>null,'style'=>null,'values' => array()],
//                        'name2_fa' => ['type'=>'text','label'=>'قسمت دوم نام شرکت فارسی','class'=>null,'style'=>null,'values' => array()],
                        'lable_fa' => ['type'=>'text','label'=>'متن فارسی دکمه','class'=>null,'style'=>null,'values' => array()],
                        'lable' => ['type'=>'text','label'=>'متن انگلیسی دکمه','class'=>null,'style'=>null,'values' => array()],
//            'image' => ['type'=>'file','label'=>'لوگو شرکت','class'=>null,'style'=>null,'values' => array()],
//                        'banner' => ['type'=>'file','label'=>'بنر بالای صفحه','class'=>null,'style'=>null,'values' => array()],
//                        'banner1' => ['type'=>'file','label'=>'بنر 1','class'=>null,'style'=>null,'values' => array()],
//                        'banner2' => ['type'=>'file','label'=>'بنر 2','class'=>null,'style'=>null,'values' => array()],
            'about_us' => ['type'=>'textarea','label'=>'درباره ما فوتر','class'=>'ckeditor','style'=>null,'values' => array()],
                        'about_us_fa' => ['type'=>'text','label'=>'درباره ما فوتر فارسی','class'=>null,'style'=>null,'values' => array()],
        ],
        'slider' => [
                        'title_fa' => ['type'=>'text','label'=>'عنوان فارسی','class'=>null,'style'=>null,'values' => array()],
//                        'title' => ['type'=>'text','label'=>'عنوان انگلیسی','class'=>null,'style'=>null,'values' => array()],
                        'image' => ['type'=>'file','label'=>'عکس اسلایدر','class'=>null,'style'=>null,'values' => array()],
                        'description_fa' => ['type'=>'textarea','label'=>'توضیحات فارسی','class'=>null,'style'=>null,'values' => array()],
//                        'description' => ['type'=>'textarea','label'=>'توضیحات انگلیسی','class'=>null,'style'=>null,'values' => array()],
//                        'op1_fa' => ['type'=>'text','label'=>'گزینه 1 فارسی','class'=>null,'style'=>null,'values' => array()],
//                        'op1' => ['type'=>'text','label'=>'گزینه 1 انگلیسی','class'=>null,'style'=>null,'values' => array()],
//                        'op2_fa' => ['type'=>'text','label'=>'گزینه 2 فارسی','class'=>null,'style'=>null,'values' => array()],
//                        'op2' => ['type'=>'text','label'=>'گزینه 2 انگلیسی','class'=>null,'style'=>null,'values' => array()],
//                        'op3_fa' => ['type'=>'text','label'=>'گزینه 3 فارسی','class'=>null,'style'=>null,'values' => array()],
//                        'op3' => ['type'=>'text','label'=>'گزینه 3 انگلیسی','class'=>null,'style'=>null,'values' => array()],
//                        'op4_fa' => ['type'=>'text','label'=>'گزینه 4 فارسی','class'=>null,'style'=>null,'values' => array()],
//                        'op4' => ['type'=>'text','label'=>'گزینه 4 انگلیسی','class'=>null,'style'=>null,'values' => array()],
//                        'link_fa' => ['type'=>'text','label'=>'لینک فارسی','class'=>null,'style'=>null,'values' => array()],
                        'link' => ['type'=>'text','label'=>'لینک ','class'=>null,'style'=>null,'values' => array()]
        ],

        'banner1' => [
//            'title' => ['type'=>'text','label'=>'عنوان','class'=>null,'style'=>null,'values' => array()],
//                        'title_fa' => ['type'=>'text','label'=>'عنوان فارسی','class'=>null,'style'=>null,'values' => array()],
                        'image' => ['type'=>'file','label'=>'عکس','class'=>null,'style'=>null,'values' => array()],
//                        'description' => ['type'=>'text','label'=>'توضیحات انگلیسی','class'=>null,'style'=>null,'values' => array()],
//                        'description_fa' => ['type'=>'text','label'=>'توضیحات فارسی','class'=>null,'style'=>null,'values' => array()],
                        'link' => ['type'=>'text','label'=>'لینک','class'=>null,'style'=>null,'values' => array()],
//                        'link_fa' => ['type'=>'text','label'=>'لینک فارسی','class'=>null,'style'=>null,'values' => array()]
        ],
        'banner2' => [
//                        'title' => ['type'=>'text','label'=>'عنوان','class'=>null,'style'=>null,'values' => array()],
//                        'title_fa' => ['type'=>'text','label'=>'عنوان فارسی','class'=>null,'style'=>null,'values' => array()],
                        'image' => ['type'=>'file','label'=>'عکس','class'=>null,'style'=>null,'values' => array()],
//                        'description' => ['type'=>'text','label'=>'توضیحات انگلیسی','class'=>null,'style'=>null,'values' => array()],
//                        'description_fa' => ['type'=>'text','label'=>'توضیحات فارسی','class'=>null,'style'=>null,'values' => array()],
                        'link' => ['type'=>'text','label'=>'لینک','class'=>null,'style'=>null,'values' => array()],
//                        'link_fa' => ['type'=>'text','label'=>'لینک فارسی','class'=>null,'style'=>null,'values' => array()]
        ],
        'service1' => [
//                        'title' => ['type'=>'text','label'=>'عنوان','class'=>null,'style'=>null,'values' => array()],
                        'title_fa' => ['type'=>'text','label'=>'عنوان فارسی','class'=>null,'style'=>null,'values' => array()],
            'image' => ['type'=>'file','label'=>'عکس','class'=>null,'style'=>null,'values' => array()],
//                        'description' => ['type'=>'text','label'=>'توضیحات انگلیسی','class'=>null,'style'=>null,'values' => array()],
                        'description_fa' => ['type'=>'text','label'=>'توضیحات فارسی','class'=>null,'style'=>null,'values' => array()],
//            'link' => ['type'=>'text','label'=>'لینک','class'=>null,'style'=>null,'values' => array()],
//                        'link_fa' => ['type'=>'text','label'=>'لینک فارسی','class'=>null,'style'=>null,'values' => array()]
        ],
        'number' => [
//                        'title' => ['type'=>'text','label'=>'عنوان','class'=>null,'style'=>null,'values' => array()],
            'title_fa' => ['type'=>'text','label'=>'عنوان فارسی','class'=>null,'style'=>null,'values' => array()],
//            'image' => ['type'=>'file','label'=>'عکس','class'=>null,'style'=>null,'values' => array()],
//                        'description' => ['type'=>'text','label'=>'توضیحات انگلیسی','class'=>null,'style'=>null,'values' => array()],
            'description_fa' => ['type'=>'text','label'=>'عدد مورد نظر','class'=>null,'style'=>null,'values' => array()],
//            'link' => ['type'=>'text','label'=>'لینک','class'=>null,'style'=>null,'values' => array()],
//                        'link_fa' => ['type'=>'text','label'=>'لینک فارسی','class'=>null,'style'=>null,'values' => array()]
        ],
        'footer_title' => [
                        'title_1' => ['type'=>'text','label'=>'عنوان اولی','class'=>null,'style'=>null,'values' => array()],
                        'title_2' => ['type'=>'text','label'=>'عنوان دومی','class'=>null,'style'=>null,'values' => array()],
                        'title_3' => ['type'=>'text','label'=>'عنوان سومی','class'=>null,'style'=>null,'values' => array()],
                        'title_4' => ['type'=>'text','label'=>'عنوان چهارمی','class'=>null,'style'=>null,'values' => array()],
        ],
        'footer_1' =>   [  'title' => ['type'=>'text','label'=>'عنوان','class'=>null,'style'=>null,'values' => array()],
//                        'title_fa' => ['type'=>'text','label'=>'عنوان فارسی','class'=>null,'style'=>null,'values' => array()],
//                          'image' => ['type'=>'file','label'=>'عکس','class'=>null,'style'=>null,'values' => array()],
//                        'description' => ['type'=>'text','label'=>'توضیحات انگلیسی','class'=>null,'style'=>null,'values' => array()],
//                        'description_fa' => ['type'=>'text','label'=>'توضیحات فارسی','class'=>null,'style'=>null,'values' => array()],
            'link' => ['type'=>'text','label'=>'لینک','class'=>null,'style'=>null,'values' => array()],
//                        'link_fa' => ['type'=>'text','label'=>'لینک فارسی','class'=>null,'style'=>null,'values' => array()]
        ],
        'footer_2' =>   [  'title' => ['type'=>'text','label'=>'عنوان','class'=>null,'style'=>null,'values' => array()],
//                        'title_fa' => ['type'=>'text','label'=>'عنوان فارسی','class'=>null,'style'=>null,'values' => array()],
//                          'image' => ['type'=>'file','label'=>'عکس','class'=>null,'style'=>null,'values' => array()],
//                        'description' => ['type'=>'text','label'=>'توضیحات انگلیسی','class'=>null,'style'=>null,'values' => array()],
//                        'description_fa' => ['type'=>'text','label'=>'توضیحات فارسی','class'=>null,'style'=>null,'values' => array()],
            'link' => ['type'=>'text','label'=>'لینک','class'=>null,'style'=>null,'values' => array()],
//                        'link_fa' => ['type'=>'text','label'=>'لینک فارسی','class'=>null,'style'=>null,'values' => array()]
        ],
        'footer_3' =>   [  'title' => ['type'=>'text','label'=>'عنوان','class'=>null,'style'=>null,'values' => array()],
//                        'title_fa' => ['type'=>'text','label'=>'عنوان فارسی','class'=>null,'style'=>null,'values' => array()],
//                          'image' => ['type'=>'file','label'=>'عکس','class'=>null,'style'=>null,'values' => array()],
//                        'description' => ['type'=>'text','label'=>'توضیحات انگلیسی','class'=>null,'style'=>null,'values' => array()],
//                        'description_fa' => ['type'=>'text','label'=>'توضیحات فارسی','class'=>null,'style'=>null,'values' => array()],
            'link' => ['type'=>'text','label'=>'لینک','class'=>null,'style'=>null,'values' => array()],
//                        'link_fa' => ['type'=>'text','label'=>'لینک فارسی','class'=>null,'style'=>null,'values' => array()]
        ],
        'footer_4' =>   [  'title' => ['type'=>'text','label'=>'عنوان','class'=>null,'style'=>null,'values' => array()],
//                        'title_fa' => ['type'=>'text','label'=>'عنوان فارسی','class'=>null,'style'=>null,'values' => array()],
//                          'image' => ['type'=>'file','label'=>'عکس','class'=>null,'style'=>null,'values' => array()],
//                        'description' => ['type'=>'text','label'=>'توضیحات انگلیسی','class'=>null,'style'=>null,'values' => array()],
//                        'description_fa' => ['type'=>'text','label'=>'توضیحات فارسی','class'=>null,'style'=>null,'values' => array()],
            'link' => ['type'=>'text','label'=>'لینک','class'=>null,'style'=>null,'values' => array()],
//                        'link_fa' => ['type'=>'text','label'=>'لینک فارسی','class'=>null,'style'=>null,'values' => array()]
        ],
//        'customers' => ['name' => ['type'=>'text','label'=>'نام انگلیسی','class'=>null,'style'=>null,'values' => array()],
//                        'name_fa' => ['type'=>'text','label'=>'نام فارسی','class'=>null,'style'=>null,'values' => array()],
//                        'c_name' => ['type'=>'text','label'=>'نام شرکت انگلیسی','class'=>null,'style'=>null,'values' => array()],
//                        'c_name_fa' => ['type'=>'text','label'=>'نام شرکت فارسی','class'=>null,'style'=>null,'values' => array()],
//                        'image' => ['type'=>'file','label'=>'عکس','class'=>null,'style'=>null,'values' => array()],
//                        'description' => ['type'=>'text','label'=>'توضیحات انگلیسی','class'=>null,'style'=>null,'values' => array()],
//                        'description_fa' => ['type'=>'text','label'=>'توضیحات فارسی','class'=>null,'style'=>null,'values' => array()],
//        ],
        'contact' => [  'email' => ['type'=>'text','label'=>'پست الکترونیک','class'=>null,'style'=>null,'values' => array()],
                        'phone' => ['type'=>'text','label'=>'شماره تلفن','class'=>null,'style'=>null,'values' => array()],
                        'mobile' => ['type'=>'text','label'=>'شماره همراه','class'=>null,'style'=>null,'values' => array()],
//                        'adress' => ['type'=>'text','label'=>'ادرس انگلیسی','class'=>null,'style'=>null,'values' => array()],
                        'address_' => ['type'=>'text','label'=>'ادرس','class'=>null,'style'=>null,'values' => array()],
                        'telegram_link' => ['type'=>'text','label'=>'لینک تلگرام','class'=>null,'style'=>null,'values' => array()],
                        'twitter_link' => ['type'=>'text','label'=>'لینک توئیتر','class'=>null,'style'=>null,'values' => array()],
                        'linkedin_link' => ['type'=>'text','label'=>'لینک لینکیداین','class'=>null,'style'=>null,'values' => array()],
                        'instagram_link' => ['type'=>'text','label'=>'لینک اینستاگرام','class'=>null,'style'=>null,'values' => array()]
        ],
        'factor' => [
            'item' => ['type'=>'text','label'=>' کم ترین تعداد محصول مورد تخفیف','class'=>null,'style'=>null,'values' => array()],
            'item_discount' => ['type'=>'text','label'=>'درصد تخفیف برا تعداد محصول','class'=>null,'style'=>null,'values' => array()],
            'price' => ['type'=>'text','label'=>'حداقل مقدار جمع سبد خرید','class'=>null,'style'=>null,'values' => array()],
            'price_discount' => ['type'=>'text','label'=>'مقدار تخفیف برای کل ','class'=>null,'style'=>null,'values' => array()],
            'tax' => ['type'=>'text','label'=>'مالیات','class'=>null,'style'=>null,'values' => array()],
        ]
//        'skill' => [    'title' => ['type'=>'text','label'=>'عنوان انگلیسی','class'=>null,'style'=>null,'values' => array()],
//                        'title_fa' => ['type'=>'text','label'=>'عنوان فارسی','class'=>null,'style'=>null,'values' => array()],
//                        'number' => ['type'=>'text','label'=>'تعداد','class'=>null,'style'=>null,'values' => array()]
//        ]

    ],
    'addable' => [
        'setting' => false,
        'service1' => true,
        'slider'=> true,
        'contact'=> true,
        'banner1'=> true,
        'banner2'=> true,
        'footer_title'=> true,
        'footer_1'=> true,
        'footer_2'=> true,
        'footer_3'=> true,
        'footer_4'=> true,
        'factor'=> true,
        'number'=> true,
        'about_us'=> true,

    ]



];
