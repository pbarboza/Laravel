<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{ 
   protected $table='usuario';
   protected $primaryKey= 'idUsuario';
   protected $fillable = array('Apellido','Nombre','Usuario','Pass');
   protected $hidden= ['created_at', 'updated_at'];  
}
