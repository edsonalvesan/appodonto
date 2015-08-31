<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtendimentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('atendimentos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('data');
			$table->string('procedimento',400);
			$table->float('valor');
			$table->integer('tipo_valor');
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
		Schema::drop('atendimentos');
	}

}
