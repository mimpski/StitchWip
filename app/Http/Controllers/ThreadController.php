<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Thread;
use DB;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index($name)
    {
        $user = User::whereName($name)->firstOrFail();
        $threads = DB::table('users_threads')
        ->where('user_id', auth()->user()->id)
        ->join('threads', 'threads.id', '=','users_threads.thread_id')
        ->select('threads.*', 'users_threads.stock')->orderBy('threads.thread_no', 'asc')->get();
  //   dd($threads);
        $numOfCols = 4;
        $rowCount = 0;
        $bootstrapColWidth = 12 / $numOfCols;
        return view('threads.all', compact('user', 'threads', 'bootstrapColWidth'));
    }

    public function update(Request $request, thread $thread)
    {
        $updates = $request->all();
        $user_id = auth()->user()->id;
            foreach($updates as $thread => $stock){
                if($thread !== "_token"){
                    DB::table('users_threads')
                    ->where('thread_id', $thread)  
                    ->where('user_id', $user_id)
                    ->limit(1)  // optional - to ensure only one record is updated.
                    ->update(array('stock' => $stock));  // update the record in the DB.
                }
                 
            }
            // DB::table('users_threads')
            // ->where('thread_id',$request->thread_id)
            // ->where('user_id', $request->user_id)
            // ->update(['stock' => $request->stock]);
	    	 $username = auth()->user()->name;
    	    return redirect('profile/'.$username.'/threads'); 
    }
}
