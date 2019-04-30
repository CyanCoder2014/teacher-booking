<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\CourseRequest;
use App\UserProfile;
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
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {


//        $courses = Course::where('type',"slider")->orderBy('id', 'desc')->paginate(6);


//        $courses = Course::orderBy('id', 'desc')->take(20)->get();
        $courses = UserProfile::orderBy('id', 'desc');
        if ($request->categories && is_array($request->categories))
            $courses = $courses->WhereIn('category_id',$request->categories);
        if ($request->types && is_array($request->types))
            $courses = $courses->WhereIn('type',$request->types);
        if ($request->min && is_int($request->min))
            $courses = $courses->WhereIn('hourly_rate','>=',$request->min);
        if ($request->max && is_int($request->max))
            $courses = $courses->WhereIn('hourly_rate','<=',$request->max);
        $courses = $courses->take(20)->get();

        $categories = Category::all();


        $coursesRequests = CourseRequest::orderBy('id', 'desc')->take(20)->get();

        return view('index', compact( 'slides',
            'courses',
            'coursesRequests'

        ));
    }

    public function filter(Request $request){
        $courses = UserProfile::orderBy('id', 'desc');
        if ($request->categories && is_array($request->categories))
            $courses = $courses->WhereIn('category_id',$request->categories);
        if ($request->types && is_array($request->types))
            $courses = $courses->WhereIn('type',$request->types);
        if ($request->min && is_int($request->min))
            $courses = $courses->WhereIn('hourly_rate','>=',$request->min);
        if ($request->max && is_int($request->max))
            $courses = $courses->WhereIn('hourly_rate','<=',$request->max);
        $courses = $courses->take(20)->get();

        $categories = Category::all();


        $coursesRequests = CourseRequest::orderBy('id', 'desc')->take(20)->get();
        return view('show.Filter', compact( 'categories',
            'courses'

        ));
    }
}
