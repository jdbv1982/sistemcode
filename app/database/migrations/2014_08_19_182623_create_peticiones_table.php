<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeticionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('peticiones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('respuesta_id')->unsigned();
			$table->integer('status_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->integer('residencia_id')->unsigned();
			$table->integer('region_id')->unsigned();
			$table->integer('distrito_id')->unsigned();
			$table->integer('municipio_id')->unsigned();
			$table->integer('localidad_id')->unsigned();
			$table->integer('tiposolicitud_id')->unsigned();

			$table->date('fecha_direccion');
			$table->text('instruccion');
			$table->text('comentario');
			$table->boolean('ccp');
			$table->boolean('ccp2');
			$table->boolean('ccp3');
			$table->boolean('ccp4');
			$table->boolean('ccp4');
			$table->boolean('atn_ciudadana');
			$table->string('num_oficio');
			$table->text('descripcion_solicitud');

			$table->foreign('respuesta_id')->references('id')->on('respuestas');
			$table->foreign('status_id')->references('id')->on('status');
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('residencia_id')->references('id')->on('residencias');
			$table->foreign('region_id')->references('id')->on('regiones');
			$table->foreign('distrito_id')->references('id')->on('distritos');
			$table->foreign('municipio_id')->references('id')->on('municipios');
			$table->foreign('localidad_id')->references('id')->on('localidades');
			//$table->foreign('tiposolicitud_id')->references('id')->on('tiposolicitudes');

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
		Schema::drop('peticiones');
	}

}
