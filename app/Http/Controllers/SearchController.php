<?php

namespace App\Http\Controllers;

use App\UserProfile;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function teacher(Request $request){
        $this->validate($request,[
           'q' => 'required|max:120'
        ]);
        $profiles = UserProfile::search($request->q)->with('user')->with('category')->get();
        $response=[];
        foreach ($profiles as $profile)
            $response[]=[
              'name'=> $profile->user->name,
              'category'=> $profile->category->title,
              'image'=> $profile->image(),
              'link'=> $profile->link(),
            ];
        return json_encode($response);


    }
}
