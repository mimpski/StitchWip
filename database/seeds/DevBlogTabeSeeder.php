<?php

use Illuminate\Database\Seeder;

class DevBlogTabeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dev_blog')->insert([
            'author_id' => '1',
            'title' => 'How to make Sunflowers',
            'description' => 'This is a kit showing how to make sunflowers all year round. ',
            'url' => 'how-to-make-sun-flowers',
            'header_image' => '/images/background.png'
        ]);
        DB::table('dev_blog')->insert([
            'author_id' => '1',
            'title' => 'How to make Daisies',
            'description' => 'This is a kit showing how to make daisies all year round. ',
            'url' => 'how-to-make-daisy-flowers',
            'header_image' => '/images/background.png'
        ]);
        DB::table('dev_blog')->insert([
            'author_id' => '1',
            'title' => 'How to make Roses',
            'description' => 'This is a kit showing how to make roses all year round. ',
            'url' => 'how-to-make-rose-flowers',
            'header_image' => '/images/background.png'
        ]);
        DB::table('dev_blog')->insert([
            'author_id' => '1',
            'title' => 'How to make tulips',
            'description' => 'This is a kit showing how to make tulips all year round. ',
            'url' => 'how-to-make-tulip-flowers',
            'header_image' => '/images/background.png'
        ]);
    }
}
