<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSocioMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socio', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('idSocio');
            $table->string('Apellido');
            $table->string('Nombre');
            $table->string('FechaNacimiento');
            $table->string('Domicilio');
            $table->string('Localidad');
            $table->string('FechaIngreso');
            $table->string('Telefono');

            $table-> integer ('TutorId')->nullable()->unsigned();
            $table->foreign('TutorId')->references('idTutor')->on('Tutor');

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
        Schema::dropIfExists('socio');
    }
}
