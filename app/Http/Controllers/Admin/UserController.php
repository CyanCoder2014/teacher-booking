<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $users = User::whereIn('type',[0,2])->orderBy('id','desc')->paginate(15);
        return view('admin.user.index',compact('users'));
    }
    public function ban(User $user){
        $user->type = 0 ;
        $user->save();
        return back()->with('message','user banned successfully');
    }
    public function unban(User $user){
        $user->type = 2 ;
        $user->save();
        return back()->with('message','user unBanned successfully');
    }
    public function destroy(User $user){
        $user->delete() ;
        return back()->with('message','user deleted successfully');
    }

}
