<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaLista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cabanas', function (Blueprint $table) {
          $table->bigIncrements('idcabanas');
          $table->string('tipo_cabanas', 45)->nullable();
          $table->integer('cantidad_personas')->nullable();
          $table->integer('habitaciones')->nullable();
          $table->integer('wifi')->nullable();
          $table->integer('calificaciones')->nullable();
          $table->string('comentarios', 45)->nullable();
          $table->string('ubicacion', 45)->nullable();
          $table->integer('estacinamiento')->nullable();
          $table->integer('id_del_dueno')->nullable();
          $table->integer('pileta')->nullable();
          $table->integer('precio_persona_dia')->nullable();
          $table->integer('precio_dia')->nullable();
      });

      Schema::create('form-contacto', function (Blueprint $table) {
          $table->bigIncrements('idform-contacto');
          $table->string('consulta', 45);
          $table->string('email', 45);
          $table->string('nombre', 45);

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
