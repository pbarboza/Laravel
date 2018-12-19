<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
     protected $table='club';
   protected $primaryKey= 'id';
   protected $fillable = array('RazonSocial','NombreFantasia','Cuit','Iva','Domicilio','Telefono','IngresosBrutos','InicioActividad');
   protected $hidden= ['created_at', 'updated_at'];  
}
