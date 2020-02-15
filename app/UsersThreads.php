<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersThreads extends Model

{

    protected $table = 'users_threads';
     
    public function users(){
        return $this->belongsToMany(User::class, 'users_threads', 'user_id', 'thread_id', 'stash');
    }
}