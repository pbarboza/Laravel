<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTutorMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('tutor', function (Blueprint $table) {
            $table->integer('idTutor');
            $table->string('Apellido');
            $table->string('Nombre');
            $table->string('Domicilio');
            $table->string('Localidad');
            $table->string('Telefono');
            $table->string('Celular');
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
        Schema::dropIfExists('tutor');
    }
}
