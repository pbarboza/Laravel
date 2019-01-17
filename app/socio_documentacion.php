<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class socio_documentacion extends Model
{
   protected $table='socio_documentacion';
   protected $primaryKey= 'idDocSocio';
   protected $fillable = array('documentacion_id','socio_id','descripcion','archivo');
   protected $hidden= ['created_at', 'updated_at'];  


 public function Documentacion(){
 	return $this->belongsTo('App\Documentacion','documentacion_id');
 }


}

