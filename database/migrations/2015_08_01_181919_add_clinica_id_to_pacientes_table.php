<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClinicaidToPacientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pacientes', function(Blueprint $table)
		{
		  $table->integer('clinica_id')->unsigned();
		  $table->foreign('clinica_id')->references('id')->on('clinicas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pacientes', function(Blueprint $table)
		{
			//
		});
	}

}
