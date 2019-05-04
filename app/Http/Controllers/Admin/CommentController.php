<?php

namespace App\Http\Controllers\Admin;

use App\ContentComment;
use App\CourseComment;
use App\Http\Controllers\Controller;
use App\ProfileComment;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $section=[
        'profile' => ProfileComment::class,
        'content' => ContentComment::class,
        'course' => CourseComment::class,
    ];

    public function index($type)
    {
        if (!isset($this->section[$type]))
            return abort(404);
        return view('admin.comment.index',compact('type'));
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
    public function show(ProfileComment $profileComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProfileComment  $profileComment
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfileComment $profileComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProfileComment  $profileComment
     * @return \Illuminate\Http\Response
     */
    public function update($type,$id)
    {
        if (!isset($this->section[$type]))
            return abort(404);
        $this->section[$type]::where('id', $id)->update([
            'approved' => 1
        ]);
        return back()->with('messsage','Comment Approved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProfileComment  $profileComment
     * @return \Illuminate\Http\Response
     */
    public function destroy($type,$id)
    {
        if (!isset($this->section[$type]))
            return abort(404);
        $this->section[$type]::where('id', $id)->delete();
        return back()->with('messsage','Comment Deleted');

    }
    public function getdata($type)
    {
        if (!isset($this->section[$type]))
            return abort(404);
        return Laratables::recordsOf($this->section[$type]);
    }
}
