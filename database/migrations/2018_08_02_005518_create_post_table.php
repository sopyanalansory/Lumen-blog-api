<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('user')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string('title')->nullable();;
            $table->longText('details')->nullable();
            $table->integer('views')->nullable();
            $table->enum('status', ['DRAFT', 'COMPLETED'])->default('DRAFT');
            $table->boolean('published')->default(false);
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
        Schema::dropIfExists('post');
    }
}
