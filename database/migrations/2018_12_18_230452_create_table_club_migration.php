<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClubMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           
        Schema::create('club', function (Blueprint $table) {
            $table->increments('id');
            $table->string('RazonSocial');
            $table->string('NombreFantasia');
            $table->string('Cuit');
            $table->string('Iva');
            $table->string('Domicilio'); 
            $table->string('Telefono');
            $table->string('IngresosBrutos');
            $table->string('InicioActividad');
           
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
        Schema::dropIfExists('club');
    }
}
