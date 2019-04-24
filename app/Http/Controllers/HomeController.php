<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


//        $courses = Course::where('type',"slider")->orderBy('id', 'desc')->paginate(6);


        $courses = Course::orderBy('id', 'desc')->take(20)->get();


        $coursesRequests = CourseRequest::orderBy('id', 'desc')->take(20)->get();

        return view('index', compact( 'slides',
            'courses',
            'coursesRequests'

        ));
    }
}
