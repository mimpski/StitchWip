<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ThreadsTableSeeder::class);
        $this->call(ChatterTableSeeder::class);
        $this->call(UsersThreadsTableSeeder::class);
        $this->call(DevBlogTabeSeeder::class);
    }
}
