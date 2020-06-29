<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universidades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("nombre",80);
            $table->string("tipo_gestion",16);
            $table->string("estado_licenciamiento",24);
            $table->integer("periodo_licenciamiento");
            $table->string("departamento",16);
            $table->string("provincia",16);
            $table->string("distrito",16);
            $table->string("latitud",32);
            $table->string("longitud",32);
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
        Schema::dropIfExists('universidades');
    }
}
