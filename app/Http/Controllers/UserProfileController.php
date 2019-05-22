<?php

namespace App\Http\Controllers;

use App\FormMaker\FormMaker;
use App\Mail\ProfileVerify;
use App\Mail\VerifyMail;
use App\ProfileComment;
use App\UserProfile;
use App\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserProfileController extends Controller
{
    protected $form = [
        [
            'name' => 'category_id',
            'type' => 'select',
            'slug' => 'Category',
            'values' => 'App\Category,id,title',
            'validation' => 'required',
        ],
        [
            'name' => 'subject',
            'type' => 'text',
            'slug' => 'Subject',
            'validation' => 'required',
        ],
        [
            'name' => 'intro',
            'type' => 'ckeditor',
            'slug' => 'About me',
            'validation' => 'required',
        ],
        [
            'name' => 'education',
            'type' => 'text',
            'slug' => 'Education',
            'validation' => 'required',
        ],
        [
            'name' => 'state_id',
            'type' => 'select',
            'slug' => 'Contry',
            'values' => 'App\Province,id,name',
            'validation' => 'required',
        ],
        [
            'name' => 'city',
            'type' => 'text',
            'slug' => 'City',
            'values' => 'App\City,id,name',
//            'condition' => 'state_id,',
            'validation' => 'required',
        ],
        [
            'name' => 'location',
            'type' => 'map',
            'slug' => 'Location',
            'values' => ['lat' => 59.334591,'lng' =>18.063240],
            'validation' => 'required',
        ],
        [
            'name' => 'tell',
            'type' => 'number',
            'slug' => 'Phone#',
            'validation' => 'required',
        ],
        [
            'name' => 'hourly_rate',
            'type' => 'number',
            'slug' => 'hourly Rate',
            'validation' => 'required',
        ],
//        [
//            'name' => 'skills',
//            'type' => 'textarea',
//            'slug' => 'Skills',
//            'validation' => 'required',
//        ],
//        [
//            'name' => 'birth',
//            'type' => 'date',
//            'slug' => 'birth',
//            'validation' => 'required',
//        ],
        [
            'name' => 'type',
            'type' => 'checkboxes',
            'slug' => 'Teaching Type',
            'values' => ['online','at student place','at teacher place','another place','teaching for alone','teaching for group'],
            'validation' => 'required',
        ],
        [
            'name' => 'languages',
            'type' => 'tags',
            'slug' => 'Languages',
            'values' => 'App\Language,id,name',
            'validation' => '',
        ],
        [
            'name' => 'image',
            'type' => 'file',
            'slug' => 'Image',
            'validation' => '',
        ],
        [
            'name' => 'intro_video',
            'type' => 'text',
            'slug' => 'Introduction Video (link)',
            'validation' => '',
        ],
        [
            'name' => 'avaliablity',
            'type' => 'textarea',
            'slug' => 'Availablity',
            'validation' => '',
        ],
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if (!isset($user->verify_at))
            return view('auth.needverify');

        $profile = UserProfile::where('user_id',Auth::id())->first();
        $form = new FormMaker($this->form,$profile);
        $form->setUrlForm('');
        $form->setMethod('post');
        return view('form',compact('form'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        if(!Auth::check())
            $comment = [
                [
                    'name'=> 'name',
                    'slug'=> 'name',
                    'type'=> 'text',
                    'validation' => 'required'
                ],
                [
                    'name'=> 'email',
                    'slug'=> 'email',
                    'type'=> 'text',
                    'validation' => 'required'
                ],
                [
                    'name'=> 'rate',
                    'slug'=> 'rate',
                    'type'=> 'rating',
                    'validation' => 'required'
                ],
                [
                    'name'=> 'comment',
                    'slug'=> 'comment',
                    'type'=> 'textarea',
                    'validation' => 'required'
                ],
            ];
        else
            $comment = [
                [
                    'name'=> 'rate',
                    'slug'=> 'rate',
                    'type'=> 'rating',
                    'validation' => 'required'
                ],
                [
                    'name'=> 'comment',
                    'slug'=> 'comment',
                    'type'=> 'textarea',
                    'validation' => 'required'
                ],
            ];

        $form = new FormMaker($comment);
        $form->setMethod('post');
        $form->setUrlForm('');
        return view('profile.show',compact('userProfile','form'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function postComment(Request $request,UserProfile $userProfile)
    {
        if(!Auth::check())
            $comment = [
                [
                    'name'=> 'name',
                    'slug'=> 'name',
                    'type'=> 'text',
                    'validation' => 'required'
                ],
                [
                    'name'=> 'email',
                    'slug'=> 'email',
                    'type'=> 'text',
                    'validation' => 'required'
                ],
                [
                    'name'=> 'rate',
                    'slug'=> 'rate',
                    'type'=> 'rating',
                    'validation' => 'required'
                ],
                [
                    'name'=> 'comment',
                    'slug'=> 'comment',
                    'type'=> 'textarea',
                    'validation' => 'required'
                ],
            ];
        else
            $comment = [
                [
                    'name'=> 'rate',
                    'slug'=> 'rate',
                    'type'=> 'rating',
                    'validation' => 'required'
                ],
                [
                    'name'=> 'comment',
                    'slug'=> 'comment',
                    'type'=> 'textarea',
                    'validation' => 'required'
                ],
            ];

        if (Auth::check() && Auth::id() == $userProfile->user->id)
            return back()->with('message','You Can\'t make Comment for Your own profile');
        $form = new FormMaker($comment);
        $form->validate($request);
        if (!isset($userProfile->id))
            return back();
        $comment = new ProfileComment();
        $comment->profile_id = $userProfile->id;
        $comment->user_id = Auth::id();
        $comment->fill($request->except('_token'));
        $comment->save();
        return back()->with('message','Your Comment Submitted');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $form = new FormMaker($this->form);
        $form->validate($request);
        $files = $form->HandleFiles($request);
//        dd($files);

        $profile = UserProfile::where('user_id',Auth::id())->first();
//        dd($request->except('_token'));
        if(!$profile){
            $profile = new UserProfile();
            $profile->user_id = Auth::id();
        }


        $user = Auth::user();
        $profile->fill($request->except('_token'));
        $profile->fill($files);
        if(isset($request->location)){
            $profile->lat = $request->location['lat'];
            $profile->lng = $request->location['lng'];

        }
        $profile->save();

        if (!isset($user->verify_at)){
            if(!$user->verifyUser){
                $user->verifyUser = VerifyUser::create(
                  [
                      'user_id' => $user->id,
                      'token' => Str::random(40),
                  ]
                );

                }
            Mail::to($user->email)->send(new VerifyMail($user));
            return back()->with('message','profile Edited Succesfuly. But you sould Verify your Email. Email sended');

        }
//        dd($profile);
        return back()->with('message','profile Edited Succesfuly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }
}
