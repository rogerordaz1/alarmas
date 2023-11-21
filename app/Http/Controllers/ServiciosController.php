<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:dashboard.servicios.index')->only('index');
        $this->middleware('can:dashboard.servicios.create')->only('create');
        $this->middleware('can:dashboard.servicios.store')->only('store');
        $this->middleware('can:dashboard.servicios.show')->only('show');
        $this->middleware('can:dashboard.servicios.edit')->only('edit');
        $this->middleware('can:dashboard.servicios.update')->only('update');
        $this->middleware('can:dashboard.servicios.delete')->only('delete');
    }


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
        $servicios = Servicios::all();
        return view(
            'servicios.create',
            [
                'servicios' => $servicios
            ]
        );
    }


    public function store(Request $request)
    {

        $nombre = $request->get('name');

        // Buscar si ya existe un servicio con el mismo nombre
        $servicioExistente = Servicios::where('nombre', $nombre)->first();

        if ($servicioExistente) {
            // Si ya existe, puedes manejarlo de la manera que desees
            // Puedes mostrar un mensaje de error, redirigir a otra página, etc.
            return redirect('/servicios')->with('error', 'El servicio ya existe');
        }

        // Si no existe, crea un nuevo servicio
        $servicio = Servicios::create([
            'nombre' => $nombre,
            'activo' => 1
        ]);

        return redirect('/servicios')->with('success', 'Servicio creado exitosamente');
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
