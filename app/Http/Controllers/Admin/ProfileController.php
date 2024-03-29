<?php

namespace App\Http\Controllers\Admin;

use App\FormMaker\FormMaker;
use App\Http\Controllers\Controller;
use App\ProfileComment;
use App\UserProfile;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
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
            'values' => 'App\Country,id,name',
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
            'name' => 'availablity',
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
        return view('admin.profile.index');
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
     * @param  \App\ProfileComment  $profileComment
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        //
    }


    public function edit(UserProfile $userProfile)
    {
        $form = new FormMaker($this->form,$userProfile);
        $form->setUrlForm('');
        $form->setMethod('post');
        return view('admin.profile.edit',compact('form'));
    }


    public function update(Request $request, UserProfile $userProfile)
    {
        $form = new FormMaker($this->form);
        $form->validate($request);
        $files = $form->HandleFiles($request);

        $userProfile->fill($request->except('_token'));
        $userProfile->fill($files);
//        if (!isset($profile->user_id))
//        dd($profile);
        $userProfile->save();
        return redirect(route('admin.profile.index'))->with('message','User Profile Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProfileComment  $profileComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        $userProfile->delete();
        return redirect(route('admin.profile.index'))->with('message','User profile deleted Successfully');

    }
    public function getdata()
    {
        return Laratables::recordsOf(UserProfile::class);
    }
}
