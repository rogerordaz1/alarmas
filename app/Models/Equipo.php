<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'activo'
    ];


    public function servicios()
    //? Aqui si no funciona hay que ver para poner el nomnbre de las id de la relavcion.
    {
        return $this->belongsToMany(Servicios::class,'equipos_servicios' , 'id_equipo', 'id_servicio');
    }

    public function bitacoras()
    {
        return $this->hasMany(Bitacora::class, 'id_equipo', 'id');
    }

}
