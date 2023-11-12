<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;
    //?Aqui falta lo de las variables que se puedan modificar


    protected $fillable = [
        'nombre',
        'activo'
    ];

    public function equipos()
    //? Aqui si no funciona hay que ver para poner el nomnbre de las id de la relavcion.
    {
        return $this->belongsToMany(Equipo::class, 'equipos_servicios' , 'id_servicio' ,'id_equipo');
    }

    public function bitacoras()
    {
        return $this->hasMany(Bitacora::class, 'id_servicio', 'id');
    }

}
