<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPacienteIdToOrcamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orcamentos', function(Blueprint $table)
		{
		  $table->integer('paciente_id')->unsigned();
		  $table->foreign('paciente_id')->references('id')->on('pacientes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('orcamentos', function(Blueprint $table)
		{
			//
		});
	}

}
