<?php

namespace App\Http\Controllers;
use Auth;
use App\Project;
use App\User;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index($name)
    {
        $user = User::whereName($name)->firstOrFail();
        return view('projects.all', compact('user'));
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
