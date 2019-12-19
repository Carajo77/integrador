<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SebaGato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
