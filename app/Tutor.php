<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
   protected $table='tutor';
   protected $primaryKey= 'idTutor';
   protected $fillable = array('Apellido','Nombre','Domicilio','Localidad','Telefono','Celular');
   protected $hidden= ['created_at', 'updated_at'];

  
	public function scopeSearch($query,$Apellido){

		return $query->where('Apellido','LIKE',"%$Apellido%");
}

}