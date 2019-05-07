<?php

namespace App\Http\Controllers;

use App\FormMaker\FormMaker;
use App\Mail\ProfileVerify;
use App\Mail\VerifyMail;
use App\ProfileComment;
use App\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserProfileController extends Controller
{
    protected $form = [
        [
            'name' => 'gender',
            'type' => 'select',
            'slug' => 'Gender',
            'values' =>['Man','Women'],
            'validation' => 'required',
        ],
        [
            'name' => 'education',
            'type' => 'text',
            'slug' => 'Education',
            'validation' => 'required',
        ],
        [
            'name' => 'intro',
            'type' => 'ckeditor',
            'slug' => 'Introduction',
            'validation' => 'required',
        ],
        [
            'name' => 'state_id',
            'type' => 'select',
            'slug' => 'State',
            'values' => 'App\Province,id,name',
            'validation' => 'required',
        ],
        [
            'name' => 'city_id',
            'type' => 'text',
            'slug' => 'City',
            'values' => 'App\City,id,name',
//            'condition' => 'state_id,',
            'validation' => 'required',
        ],
        [
            'name' => 'address',
            'type' => 'textarea',
            'slug' => 'Address',
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
        [
            'name' => 'skills',
            'type' => 'textarea',
            'slug' => 'Skills',
            'validation' => 'required',
        ],
        [
            'name' => 'birth',
            'type' => 'date',
            'slug' => 'birth',
            'validation' => 'required',
        ],
        [
            'name' => 'type',
            'type' => 'select',
            'slug' => 'Teaching Type',
            'values' => ['private','group','online'],
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $profile->save();

        if (!isset($user->verify_at)){
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
