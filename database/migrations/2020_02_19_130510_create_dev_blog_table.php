<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dev_blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('url')->unique();
            $table->text('description');
            $table->string('author_id');
            $table->string('header_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dev_blog');
    }
}
