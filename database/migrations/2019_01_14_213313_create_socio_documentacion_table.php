<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocioDocumentacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socio_documentacion', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idDocSocio');


            $table-> integer ('documentacion_id')->unsigned();        
            $table->foreign ('documentacion_id') -> references ('idDocumentacion')->on('documentacion');

            $table-> integer ('socio_id')->unsigned();
            $table->foreign('socio_id')->references('idSocio')->on('socio');


            $table->string('descripcion');
            $table->string('archivo');
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
        Schema::dropIfExists('socio_documentacion');
    }
}
