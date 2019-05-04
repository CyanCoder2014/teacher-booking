<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\ContactUs;
use App\Course;
use App\User;
use App\UserProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $users = User::all();
        $profiles = UserProfile::all();
        $topProfile = UserProfile::select(DB::raw('avg(rate) as avgrate'),'user_profiles.*')->join('profile_comments', 'user_profiles.id', '=', 'profile_comments.profile_id')->groupBy('user_profiles.id')->orderBy('avgrate','desc')->take(10)->get();
        $unreadcontact = ContactUs::orderBy('id','desc')->where('status',0)->limit(10)->get();
        $categories = Category::select(DB::raw('count(user_profiles.id) as total'),'categories.*')->rightjoin('user_profiles', 'user_profiles.category_id', '=', 'categories.id')->groupBy('categories.id')->orderBy('total','desc')->get();
        $lastCourses = Course::orderBy('id','desc')->limit(10)->get();
        return view('admin.index',compact('users','profiles','topProfile','unreadcontact','categories','lastCourses'));
    }
}
