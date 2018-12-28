<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocSocio extends Model
{
   protected $table='DocSocio';
   protected $primaryKey= 'idDocSocio';
   protected $fillable = array('idSocio,idDocumentacion','descripcion','archivo');
   protected $hidden= ['created_at', 'updated_at'];  
}
