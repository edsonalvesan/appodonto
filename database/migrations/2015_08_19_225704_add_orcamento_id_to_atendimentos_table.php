<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrcamentoIdToAtendimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('atendimentos', function(Blueprint $table)
		{
		  $table->integer('orcamento_id')->unsigned();
		  $table->foreign('orcamento_id')->references('id')->on('orcamentos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('atendimentos', function(Blueprint $table)
		{
			//
		});
	}

}
