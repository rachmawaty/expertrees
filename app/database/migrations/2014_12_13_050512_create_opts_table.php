<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opts', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('name', 255);
            $table->string('type', 10);
            $table->string('cause', 255);

            $table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('opts');
		/*Schema::table('opts', function(Blueprint $table)
		{
			//
		});*/
	}

}
