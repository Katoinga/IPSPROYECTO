<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidades extends Model
{
    //Estas funciones ayudaran a que el controller haga consultas rapidas
    //Query Scope
    public function scopeRegion($query,$region){
      if ($region) {
        return $query->where('departamento','LIKE',"%$region%");
      }
    }
    public function scopeGestion($query,$gestion){
      if ($gestion) {
        return $query->where('tipo_gestion','LIKE',"%$gestion%");
      }
    }
    public function scopeLic($query,$lic){
      if ($lic) {
        return $query->where('estado_licenciamiento','LIKE',"%$lic%");
      }
    }

}
