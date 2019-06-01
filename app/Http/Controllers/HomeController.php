<?php

namespace App\Http\Controllers;

use App\Category;
use App\Course;
use App\CourseRequest;
use App\UserProfile;
use App\Utility;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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



        $coursesRequests = CourseRequest::orderBy('id', 'desc')->take(20)->get();

        return view('index', compact(
            'courses',
            'coursesRequests'

        ));
    }
    public function ajaxfilter(Request $request){
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

        $response = [];
        foreach ($courses as $key => $course){
            $response[$key]=[];
            $response[$key]['id'] = $course->id;
            $response[$key]['title'] = $course->title;
            $response[$key]['image'] = $course->image();
            $response[$key]['subject'] = $course->subject;
            $response[$key]['city'] = $course->city;
            $response[$key]['state'] = $course->state->name;
            $response[$key]['category'] = $course->category->title;
            $response[$key]['rate'] = $course->AcceptedComment->avg('rate')??'';
            $response[$key]['hourly_rate'] = $course->hourly_rate??0;
            $response[$key]['intro'] = Str::words($course->intro , $words = 6, $end = '...');
        }

        return json_encode($response);
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


    public function info()
    {
        $courses = Course::where('type',"slider")->orderBy('id', 'desc')->paginate(6);
        $info = Utility::where('type',"info")->orderBy('id', 'desc')->paginate(6);

        return view('info', compact(
            'courses', 'info'

        ));
    }
}
