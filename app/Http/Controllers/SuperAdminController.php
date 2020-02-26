<?php

namespace App\Http\Controllers;
use Auth;
use App\Project;
use App\User;
use App\NewsPost;
use DateTime;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        $lastWeek = (new DateTime('now -7 days'))->format('Y-m-d H:i:s');
        $this->middleware('superadmin');
        $user = Auth()->user();
        $body_class = 'superadmin';
        $user_total = DB::table('users')->count();
        $weeks_users = DB::table('users')->whereBetween('created_at', [$lastWeek, new DateTime()])->count();
        $todays_users = DB::table('users')->whereDate('created_at', Carbon::today())->count();
        $todays_logins = DB::table('users')->whereDate('last_login', Carbon::today())->count();
        return view('super_admin.dashboard', compact('body_class','user', 'user_total', 'weeks_users', 'todays_users', 'todays_logins'));
    }

    public function users()
    {
        $this->middleware('superadmin');
        $user = Auth()->user();
        $body_class = 'superadmin';
        $users = DB::table('users')->get();
        //dd($users);
        return view('super_admin.users', compact('body_class','users'));
    }

    public function deleteUser(Request $request)
    {
        $this->middleware('superadmin');
        DB::table('users')->delete($request->delete_user_id);
        DB::table('projects')->where('user_id', $request->delete_user_id)->delete();
        $body_class = 'superadmin';
        $users = DB::table('users')->get();
        return view('super_admin.users', compact('body_class','users'));
    }

    public function updateUser(Request $request)
    {
        $this->middleware('superadmin');
        DB::table('users')->where('id', $request->update_user_id)->update(['role' => $request->role]);
        $body_class = 'superadmin';
        $users = DB::table('users')->get();
        return view('super_admin.users', compact('body_class','users'));
    }

    public function news()
    {
        $this->middleware('superadmin');
        $user = Auth()->user();
        $body_class = 'superadmin';
        $news = DB::table('news_post')->orderBy('created_at', 'desc')->get();
        return view('super_admin.news_all', compact('body_class','news'));
    }

    public function addNews()
    {
        $this->middleware('superadmin');
        $user = Auth()->user();
        $body_class = 'superadmin';
        return view('super_admin.news_new', compact('body_class','user'));
    }

    public function publishNews(Request $request)
    {
        $this->middleware('superadmin');
        $body_class = 'superadmin';
        $news = DB::table('news_post')->where('id', $request->update_post_id)->update(['status' => $request->status]);
        return redirect('/superadmin/news');
    }

    public function deleteNews(Request $request)
    {
        $this->middleware('superadmin');
        $body_class = 'superadmin';
        $news = DB::table('news_post')->where('id', $request->delete_news_id)->delete();
        return redirect('/superadmin/news');
    }

    public function createNews(Request $request)
    {
      //  dd($request);
        $this->middleware('superadmin');
        $body_class = 'superadmin';
        $post = new NewsPost();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->content = $request->main_content;
        $post->seo_description = $request->seo_description;
        $post->header_image = $request->header_image;
        $post->status = $request->status;
    	$post->author = $request->author;
        $post->save();
        return redirect('/superadmin/news');
    }

    public function editNews($id)
    {
        $this->middleware('superadmin');
        $body_class = 'superadmin';
        $post = DB::table('news_post')->where('id', $id)->first();
       // dd($post);
        return view('super_admin.news_edit', compact('body_class','post'));
    }

    public function updateNews($id, Request $request)
    {
        $this->middleware('superadmin');
        $body_class = 'superadmin';
        DB::table('news_post')
        ->where('id', $id)  
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('title' => $request->title, 'slug' => $request->slug, 'content' => $request->main_content,
    'seo_description' => $request->seo_description, 'header_image' => $request->header_image, 'status' => $request->status,
    'author' => $request->author));  // update the record in the DB. 
        return redirect('/superadmin/news');
    }

}
