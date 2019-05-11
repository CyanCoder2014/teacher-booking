<?php

namespace App\Http\Controllers\Admin;

use App\CourseRequest;
use App\Http\Controllers\Controller;
use foo\bar;
use Illuminate\Http\Request;

class CourseRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = CourseRequest::orderBy('id','desc')->paginate(10);
        return view('admin.CourseRequest.index',compact('requests'));
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
     * @param  \App\CourseRequest  $courseRequest
     * @return \Illuminate\Http\Response
     */
    public function show(CourseRequest $courseRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourseRequest  $courseRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseRequest $courseRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourseRequest  $courseRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseRequest $courseRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CourseRequest  $courseRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseRequest $courseRequest)
    {
        $courseRequest->delete();
        return back()->with('message','Request has been deleted successfuly');
    }
}
