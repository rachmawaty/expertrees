<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFertilsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fertils', function(Blueprint $table)
		{
			$table->increments('id');

            $table->string('nama', 255);
            $table->string('brand', 255);
            $table->string('type', 255);
            $table->string('weight', 255);
            $table->string('quality', 255);
            $table->string('description', 255);

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
		Schema::table('fertils', function(Blueprint $table)
		{
			//
		});
	}

}
