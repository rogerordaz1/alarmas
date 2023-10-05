<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;

    public function bitacoras()
    {
        return $this->hasMany(Bitacora::class, 'id_estado', 'id');
    }
}
