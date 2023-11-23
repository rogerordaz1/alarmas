<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use Illuminate\Http\Request;

class AlarmasController extends Controller
{

    public function index()
    {
        $bitacoras = Bitacora::orderBy('fecha_inicio', 'desc')->get();
       // $bitacoras = Bitacora::all();

        return view("alarmas" , [
            'bitacoras' => $bitacoras
        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $alarma = Bitacora::find($id);
        return view('edit_alarmas' , [
            'alarma'=> $alarma,
        ]);
    }


    public function update(Request $request, Bitacora $alarma)
    {
        $alarma->respuesta = $request->get('respuesta');

        $alarma->save();
        return redirect('/alarmas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
