<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_threads', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('thread_id')->unsigned();
            $table->integer('stock');
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->integer('thread_id')->references('id')->on('threads')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_threads');
    }
}
