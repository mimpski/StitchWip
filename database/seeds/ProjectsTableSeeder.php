<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'user_id' => '1',
            'name' => 'Haunted House',
            'source' => 'witchy stitcher',
            'status' => 'WIP',
            'started' => Carbon::parse('2000-01-01'),
            'finished' => NULL
        ]);
        DB::table('projects')->insert([
            'user_id' => '1',
            'name' => 'Disney',
            'source' => 'etsy',
            'status' => 'Complete',
            'started' => Carbon::parse('2000-01-01'),
            'finished' => Carbon::parse('2001-01-01')
        ]);
        DB::table('projects')->insert([
            'user_id' => '1',
            'name' => 'Sunflowers',
            'source' => 'kit',
            'status' => 'Stash',
            'started' => NULL,
            'finished' => NULL
        ]);
        DB::table('projects')->insert([
            'user_id' => '2',
            'name' => 'Disney',
            'source' => 'etsy',
            'status' => 'Complete',
            'started' => Carbon::parse('2000-01-01'),
            'finished' => Carbon::parse('2001-01-01')
        ]);
        DB::table('projects')->insert([
            'user_id' => '3',
            'name' => 'Sunflowers',
            'source' => 'kit',
            'status' => 'Stash',
            'started' => NULL,
            'finished' => NULL
        ]);
    }
}
