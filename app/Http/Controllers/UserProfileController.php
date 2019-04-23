<?php

namespace App\Http\Controllers;

use App\FormMaker\FormMaker;
use App\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Sodium\compare;

class UserProfileController extends Controller
{
    protected $crud = [
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
            'type' => 'select',
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
        $this->middleware('auth');
        $profile = UserProfile::where('user_id',Auth::id())->first();
        $form = new FormMaker($this->crud,$profile);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProfile $userProfile)
    {
        //
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
        $this->middleware('auth');
        $form = new FormMaker($this->crud);
        $form->validate($request);
        $files = $form->HandleFiles($request);
//        dd($files);

        $profile = UserProfile::where('user_id',Auth::id())->first();
//        dd($request->except('_token'));
        if(!$profile)
        {
            $profile = new UserProfile();
            $profile->user_id = Auth::id();
        }

        $profile->update($request->except('_token'));
        $profile->update($files);
//        dd($profile);
        $profile->save();
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
