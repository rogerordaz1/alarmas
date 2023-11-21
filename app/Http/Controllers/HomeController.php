<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use App\Models\Equipo;
use App\Models\Servicios;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        $alarmas = Bitacora::all();
        $servicesCount = Servicios::all()->count();
        $servicesDowm = Servicios::where('activo', '=', false)->get()->count();
        $servicesUp = Servicios::where('activo', '=', true)->get()->count();
        $upPercent = ($servicesUp / $servicesCount) * 100;
        $equipos = Equipo::all();
        $equiposCount = $equipos->count();
        $equiposDowm = Equipo::where('activo', '=', false)->get()->count();
        $equiposUp = Equipo::where('activo', '=', true)->get()->count();
        $equiposUpPercent = ($equiposUp / $equiposCount) * 100;
        $resultados = [];
        foreach ($users as $user) {
            $totalDuration = 0;
            $bitacorasUsuario = $user->bitacoras;
            // Verifica si el usuario tiene bitácoras antes de calcular el promedio
            if ($bitacorasUsuario->count() > 0) {
                foreach ($bitacorasUsuario as $bitacora) {
                    $fechaInicio = Carbon::parse($bitacora->fecha_inicio);
                    $fechaFin = Carbon::parse($bitacora->fecha_final);

                    $duracionBitacora = $fechaInicio->diffInRealMinutes($fechaFin);
                    $totalDuration += $duracionBitacora;
                }
                // Calcula el promedio
                $promedio = $totalDuration / count($bitacorasUsuario);
            } else {
                // Si el usuario no tiene bitácoras, establece el promedio en 0
                $promedio = 0;
            }
            // Almacena el promedio en el array asociándolo al índice correspondiente
            $resultados[] = $promedio;
        }
        return view('index', [
            'users' => $users,
            'servicesCount' => $servicesCount,
            'servicesDowm' => $servicesDowm,
            'servicesUp' => $servicesUp,
            'upPercent' => $upPercent,
            'equiposCount' => $equiposCount,
            'equiposDowm' => $equiposDowm,
            'equiposUpPercent' => $equiposUpPercent,
            'equiposUp' => $equiposUp,
            'resultados' => $resultados,
            'alarmas' => $alarmas
        ]);
    }
}
