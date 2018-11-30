<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
   protected $table='socio';
   protected $primarykey= 'idSocio';
   protected $fillable = array('Apellido','Nombre','FechaNacimiento','Domicilio','Localidad','FechaIngreso','Telefono');
   protected $hidden= ['created_at', 'updated_at'];  
}
