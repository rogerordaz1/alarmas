<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{


    public function index()
    {
        $servicios = Servicios::all();
        $serviciosCount = Servicios::all()->count();

        return view(
            'servicios.index',
            [
                'servicios' => $servicios,
                'serviciosCount' => $serviciosCount
            ]
        );
    }


    public function create()
    {
        return view(
            'servicios.create',
        );
    }


    public function store(Request $request)
    {
        $servicio = Servicios::create([
            'nombre' => $request->get('name'),
            'activo' => 1
        ]);
        return redirect('/servicios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicios  $servicios
     * @return \Illuminate\Http\Response
     */
    public function show(Servicios $servicios)
    {
        //
    }


    public function edit( $id)
    {
        $servicio = Servicios::find($id);

        return view(
            'servicios.edit',
            [
                'servicio' => $servicio
            ]
        );
    }


    public function update(Request $request, Servicios $servicio)
    {
        $servicio->nombre = $request->get('name');
        $servicio->activo = $request->has('activo');
        $servicio->save();
        return redirect('/servicios');
    }

    
    public function destroy($id)
    {
        $user = Servicios::where('id', $id)->first();
        $user->delete();
        return back();
    }
}
