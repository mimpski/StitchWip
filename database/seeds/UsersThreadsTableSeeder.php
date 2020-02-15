<?php

use Illuminate\Database\Seeder;

class UsersThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $threads = DB::table('threads')->get();

        foreach ($threads as $thread)
        {
            DB::table('users_threads')->insert([
                'thread_id' => $thread->id,
                'user_id' => '1',
                'stock' => rand(0,10),
            ]);
        }

        
        
    }
}
