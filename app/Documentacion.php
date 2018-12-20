<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentacion extends Model
{
   protected $table='documentacion';
   protected $primaryKey= 'idDocumentacion';
   protected $fillable = array('Descripcion,Obligatorio');
   protected $hidden= ['created_at', 'updated_at'];  
}
