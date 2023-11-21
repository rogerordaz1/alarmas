<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Servicios;
use Illuminate\Http\Request;

class EquipoController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:dashboard.equipos.index')->only('index');
        $this->middleware('can:dashboard.equipos.create')->only('create');
        $this->middleware('can:dashboard.equipos.store')->only('store');
        $this->middleware('can:dashboard.equipos.show')->only('show');
        $this->middleware('can:dashboard.equipos.edit')->only('edit');
        $this->middleware('can:dashboard.equipos.update')->only('update');
        $this->middleware('can:dashboard.equipos.delete')->only('delete');
    }
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

        $equipos = [
            "InterfazLANCorp",
            "InterfazLANGesnet",
            "NagiosCore",
            "SW3raPlanta10",
            "SW3raPlanta11",
            "SW3raPlanta45",
            "SW3raPlanta61",
            "SW3raPlanta9",
            "SWCAT33",
            "SWCMT13",
            "SWCMT3",
            "SWCMT50",
            "SWCMTGesnet5",
            "SWCentral119",
            "SWCentral18",
            "SWCentral34",
            "SWCentral83",
            "SWCentralGesnet3",
            "SWInformatica102",
            "SWInformatica15",
            "SWInformatica19",
            "SWLogistica14",
            "SWLogistica4",
            "SWServidores12",
            "SWServidores201",
            "SWServidores202",
            "SWServidores203",
            "SWServidores205",
            "SWServidores206",
            "SWServidores82",
            "ServBD",
            "ServCDCorp",
            "ServCDGesnet1",
            "ServCDGesnet2",
            "ServColector",
            "ServDNSCorp",
            "ServESXiCAT",
            "ServESXiTP",
            "ServESXiWEB",
            "ServFTPPri",
            "ServFactSoyo",
            "ServKavCorp",
            "ServKavGesnet",
            "ServOCS",
            "ServPfsense",
            "ServPolLinux",
            "ServProx1",
            "ServProx2",
            "ServProx3",
            "ServProx4",
            "ServProx5",
            "ServProx6",
            "ServProx7",
            "ServProx8",
            "ServRSATCorp",
            "ServRSATGesnet",
            "ServRepos",
            "ServTPQpstm",
            "ServTPSoyoDM",
            "ServTPUrmet",
            "ServTiempo",
            "ServWEB",
            "ServWSUS",
            "ServWSUSGesnet",
            "SwExternoAlameda35",
            "SwExternoAlmacen7",
            "SwExternoCS104",
            "SwExternoCS105",
            "SwExternoCableCoax5",
            "SwExternoGuane184",
            "SwExternoHCruz31",
            "SwExternoHCruz55",
            "SwExternoMantua51",
            "SwExternoMinas40",
            "SwExternoOCEmpresa182",
            "SwExternoOCMarti191",
            "SwExternoOCPR100",
            "SwExternoPalacios71",
            "SwExternoPalacios78",
            "SwExternoPalma183",
            "SwExternoSanJuan67",
            "SwExternoSanJuan70",
            "SwExternoSanLuis66",
            "SwExternoSandino39",
            "SwExternoVinales101"
        ];



        return view(
            'equipos.create',
            [
                'equipos' => $equipos
            ]
        );
    }


    public function store(Request $request)
    {

        $nombre = $request->get('name');

        // Buscar si ya existe un servicio con el mismo nombre
        $equipoExistente = Equipo::where('nombre', $nombre)->first();

        if ($equipoExistente) {
            // Si ya existe, puedes manejarlo de la manera que desees
            // Puedes mostrar un mensaje de error, redirigir a otra página, etc.
            return redirect('/equipos')->with('error', 'El equipo ya existe');
        }

        // Si no existe, crea un nuevo servicio
        $equipo = Equipo::create([
            'nombre' => $nombre,
            'activo' => 1
        ]);

        return redirect('/equipos')->with('success', 'Servicio creado exitosamente');
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
