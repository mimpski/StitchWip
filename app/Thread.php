<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public function user(){
        return $this->belongsToMany(User::class, 'users_threads');
    }

    public function users_threads(){
        return $this->belongsToMany(Thread::class, 'users_threads', 'user_id', 'thread_id', 'stash' );
    }
}
