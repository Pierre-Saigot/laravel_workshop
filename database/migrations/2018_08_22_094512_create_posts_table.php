<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('posts', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('category_id')->nullable();
			$table->enum('post_type',['formation','stage']);
			$table->string('title');
			$table->text('description')->nullable();
			$table->date('start');
			$table->date('end');
			$table->string('status');
			$table->float('price', 7, 2);
			$table->integer('max_users');
			$table->foreign('category_id')->references('id')->on('categories')->onDelete('SET NULL');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down(){
		Schema::dropIfExists('posts');
	}
}
