<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequerimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requerimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->integer('usuario_id')->unsigned();
            $table->integer('tipo_id')->unsigned();
            $table->integer('clase_id')->unsigned();
            $table->integer('celular');
            $table->string('imagen');
            $table->string('direccion');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->foreign('clase_id')->references('id')->on('clases');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requerimientos');
    }
}
