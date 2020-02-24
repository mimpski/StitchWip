<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'name' => 'mimpski',
            'email' => 'mimpski@hotmail.com',
            'password' => Hash::make('Panic13!'),
            'role' => 'superadmin',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'last_login' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'mims',
            'email' => 'mimpski1@hotmail.com',
            'password' => Hash::make('Panic13!'),
            'role' => 'stitcher',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'last_login' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'mim5s',
            'email' => 'mimp5ski1@hotmail.com',
            'password' => Hash::make('Panic13!'),
            'role' => 'stitcher',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'last_login' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'miwms',
            'email' => 'mimpsdddki1@hotmail.com',
            'password' => Hash::make('Panic13!'),
            'role' => 'stitcher',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'last_login' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'miwmddds',
            'email' => 'mimpssssdddki1@hotmail.com',
            'password' => Hash::make('Panic13!'),
            'role' => 'stitcher',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'last_login' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
                // generate a random number and use it to grab an adorable avatar!
                $avatar_id = rand(0, 6000);
                $path = public_path().'/images/users/mimpski/';
                File::makeDirectory($path, $mode = 0777, true, true); 
                copy('https://api.adorable.io/avatars/'.$avatar_id, $path .'/avatar.png');
    }
}
