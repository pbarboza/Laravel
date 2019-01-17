<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
   protected $table='socio';
   protected $primaryKey= 'idSocio';
   protected $fillable = array('Apellido','Nombre','FechaNacimiento','Domicilio','Localidad','FechaIngreso','Telefono','idTutor');
   protected $hidden= ['created_at', 'updated_at'];  


public function scopeSearch($query,$Apellido){

		return $query->where('Apellido','LIKE',"%$Apellido%");
}


public function socio_documentacion (){
 	return $this->belongsToMany('App\socio_documentacion');
 }

 public function tutor(){
 	return $this->belongTo('App\Tutor');
 }


}
