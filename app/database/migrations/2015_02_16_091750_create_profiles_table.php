<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->index()->unsigned();
			$table->string('storename');
			$table->string('country');
			$table->string('state');
			$table->string('district');
			$table->string('city');
			$table->string('zipcode');
			$table->string('location');
			$table->integer('block_id')->index()->unsigned()->nullable();
			$table->integer('category_id')->index()->unsigned();
			$table->integer('subcategory_id')->index()->unsigned();
			$table->string('weekend');
			$table->string('timing');
			$table->string('status', 10)->nullable();
			$table->string('image')->nullable();
			$table->string('website')->nullable();
			$table->text('about');
			$table->integer('views')->default(0);
			$table->softDeletes();
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
		Schema::drop('profiles');
	}

}
