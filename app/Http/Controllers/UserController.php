<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Project; 
use Auth;
use File;
use Redirect;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($name)
    {
        $user = User::whereName($name)->firstOrFail();
        $wips = Project::whereUser_id($user->id)->where('status','wip')->get();
        $comps = Project::whereUser_id($user->id)->where('status','complete')->get();
        $stash = Project::whereUser_id($user->id)->where('status','stash')->get();

      //  dd($wips);
        return view('user.profile', compact('user','wips','comps','stash'));
    }

    protected function save_profile(Request $request, $user){
     // dd($request);
      $avatar_id = $request->new_profile;
      $username = Auth::user()->name;
      $path = public_path().'/images/users/' . $username.'/';
        File::makeDirectory($path, $mode = 0777, true, true); 
        copy('https://api.adorable.io/avatars/'.$avatar_id, $path .'avatar.png');
        return Redirect::back();
    }

}