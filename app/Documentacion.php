<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentacion extends Model
{
   protected $table='documentacion';
   protected $primaryKey= 'idDocumentacion';
   protected $fillable = array('Descripcion,Obligatorio');
   protected $hidden= ['created_at', 'updated_at'];  


 public function socio_documentacion (){
 	return $this->hasMany('App\socio_documentacion','documentacion_id');
 }


}
