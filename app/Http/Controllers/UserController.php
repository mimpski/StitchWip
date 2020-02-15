<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Project; 

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
        $comps = Project::whereUser_id($user->id)->where('status','completed')->get();
        $stash = Project::whereUser_id($user->id)->where('status','stash')->get();

      //  dd($wips);
        return view('user.profile', compact('user','wips','comps','stash'));
    }

}