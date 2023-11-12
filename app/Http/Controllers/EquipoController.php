<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Servicios;
use Illuminate\Http\Request;

class EquipoController extends Controller
{

    public function index()
    {
       $equipos = Equipo::all();

       return view(
        'equipos.index',
        [
            'equipos' => $equipos,
        ]
    );

    }


    public function create()
    {
        return view(
            'equipos.create',
        );
    }


    public function store(Request $request)
    {
        $equipo = Equipo::create([
            'nombre' => $request->get('name'),
            'activo' => 1
        ]);
        return redirect('/equipos');
    }


    public function show($id)
    {
        $equipo = Equipo::find($id);
        return view(
            'equipos.show_servicios',
            [
                'equipo' => $equipo,
            ]
        );
    }


    public function edit($id)
    {
        $equipo = Equipo::find($id);

        return view(
            'equipos.edit',
            [
                'equipo' => $equipo
            ]
        );
    }


    public function update(Request $request, Equipo $equipo)
    {
        $equipo->nombre = $request->get('name');
        $equipo->activo = $request->has('activo');
        $equipo->save();
        return redirect('/equipos');
    }


    public function destroy($id)
    {
        $equipo = Equipo::where('id', $id)->first();
        $equipo->delete();
        return back();
    }
}
