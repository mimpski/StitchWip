<?php

namespace App\Http\Controllers;
use Auth;
use App\Project;
use App\User;
use DateTime;
use DB;
use Carbon\Carbon;
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

}
