<?php

use Illuminate\Database\Seeder;

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
        ]);
                // generate a random number and use it to grab an adorable avatar!
                $avatar_id = rand(0, 6000);
                $path = public_path().'/images/users/mimpski/';
                File::makeDirectory($path, $mode = 0777, true, true); 
                copy('https://api.adorable.io/avatars/'.$avatar_id, $path .'/avatar.png');
    }
}
