<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    use HasFactory;

    public function equipos_servicio()
    {
        return $this->belongsTo(ServicioEquipo::class, 'id_servicio_equipo', 'id');
    }
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado', 'id');
    }
    public function equipo()
    {
        return $this->belongsTo(Equipo::class, 'id_equipo', 'id');
    }
    public function servicio()
    {
        return $this->belongsTo(Servicios::class, 'id_servicio', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

}
