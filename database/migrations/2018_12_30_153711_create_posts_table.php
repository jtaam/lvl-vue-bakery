<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('author_id');
            $table->unsignedInteger('category_id')->default('0');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('top_image')->nullable();
            $table->text('top_description')->nullable();
            $table->text('post_promo')->nullable();
            $table->string('left_image')->nullable();
            $table->string('right_image')->nullable();

            $table->string('public_id')->nullable();

            $table->text('bottom_description');
            $table->integer('view_count')->default(0);
            $table->boolean('status')->default(false);
            $table->boolean('is_approved')->default(false);
            $table->foreign('author_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('posts');
    }
}
