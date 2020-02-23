<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Dev_blog;
use DB;

use Illuminate\Http\Request;

class DevBlogController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        $posts = DB::table('dev_blog')
        ->where('author_id', '1')->get();
      //  dd($user);
        return view('dev_blog.all', compact('user','posts'));
    }

    public function post($slug)
    {
        $user = User::find(1);
        $post = DB::table('dev_blog')
        ->where('url', $slug)->first();
      //  dd($user);
        return view('dev_blog.post', compact('user','post'));
    }


    public function add()
    {
        $user = auth()->user();
    	return view('projects.add', compact('user'));
    }

    public function create(Request $request)
    {
    	$project = new Project();
        $project->name = $request->name;
        $project->source = $request->source;
        $project->status = $request->status;
    	$project->user_id = Auth::id();
        $project->save();
        $username = auth()->user()->name;
    	return redirect('profile/'.$username.'/projects'); 
    }

    public function edit(project $project)
    {

    	if (Auth::check() && Auth::user()->id == $project->user_id)
        {            
                $user = auth()->user();
                return view('projects.edit', compact('project', 'user'));
        }           
        else {
             return redirect('/');
         }            	
    }

    public function update(Request $request, project $project)
    {
    	if(isset($_POST['delete'])) {
    		$project->delete();
    		return redirect()->back();
    	}
    	else
    	{
    		$project->name = $request->name;
            $project->source = $request->source;
            $project->status = $request->status;
	    	$project->save();
	    	$username = auth()->user()->name;
    	    return redirect('profile/'.$username.'/projects'); 
    	}    	
    }
}
