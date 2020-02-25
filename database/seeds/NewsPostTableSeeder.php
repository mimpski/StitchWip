<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;
class NewsPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *       $table->bigIncrements('id');
     *       $table->string('title');
     *       $table->string('slug')->unique()->nullable();
     *       $table->longText('content')->nullable();
     *       $table->string('status')->default('draft');
     *       $table->string('header_image')->nullable();
     *       $table->string('seo_description')->nullable();
     *       $table->timestamps();
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,10) as $index) {
	        DB::table('news_post')->insert([
	            'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
	            'slug' => $faker->slug,
                'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                'status' => 'published',
                'header_image' => $faker->imageUrl($width = 640, $height = 480),
                'seo_description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'author' => '1',
                'published' => $faker->dateTime($max = 'now', $timezone = null),
                'created_at' => Carbon::now()
	        ]);
	    }
    }
}
