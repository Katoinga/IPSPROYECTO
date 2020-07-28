<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Full_text_search extends Model
{
    use Notifiable;
    use SearchableTrait;

    protected $searchable = [
        'columns' => [
            'universidades.nombre'  => 10,
            'universidades.tipo_gestion'   => 10,
            'universidades.estado_licenciamiento'   => 10,
            'universidades.periodo_licenciamiento'    => 10,
            'universidades.departamento'  => 10,
            'universidades.provincia'  => 10,
            'universidades.distrito'  => 10,
            'universidades.latitud'  => 10,
            'universidades.longitud'  => 10,

        ]
    ];

    protected $fillable = [
        'nombre', 'tipo_gestion', 'estado_licenciamiento', 'periodo_licenciamiento', 'departamento', 'provincia','distrito','latitud','longitud',
    ];
}
