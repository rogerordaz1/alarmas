@extends('layouts.app')

@section('body')
    @include('componentes.navbar')

    <div class="wrapper d-flex flex-column min-vh-100 bg-light">

        @include('componentes.header')


        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <h1 class="display-3">Servicios</h1>
                <div class="card-header">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="d-flex justify-content-end mb-3">
                        <button class="btn btn-primary" id="add" type="button">Agregar</button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table border mb-0" id="servicios">
                        <thead class="table-light fw-semibold">
                            <tr class="align-middle">

                                
                                <th width="20%">Nombre</th>
                                <th width="20%">Activo</th>
                                <th width="20%">Utilidad</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servicios as $servicio)
                                <tr class="align-middle">


                                    <td>
                                        <div>{{ $servicio->nombre }}</div>
                                    </td>
                                    <td>
                                        <div>
                                            {{ $servicio->activo == 1 ? 'Activo' : 'Inactivo' }}

                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{ route('servicios.destroy', $servicio) }}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <a href="{{ route('servicios.edit', $servicio) }}" type="button" title="Editar"
                                                class="btn btn-outline-primary btn-sm"><i class="fas fa-pen"></i></a>

                                            <button type="button" class="btn btn-outline-danger btn-sm" title="Borrar"
                                                data-toggle="modal" data-target="#modal1{{ $servicio->id }}">
                                                <i class="fas fa-trash"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="modal1{{ $servicio->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalLabel">Borrar Servicio</h5>

                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Estas seguro que desea borrar el servicio:
                                                            {{ $servicio->nombre }}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Cancelar</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Confirmar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>

                                    </td>


                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection




@section('css')
    <link rel="stylesheet" href="{{ asset('vendors/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/simplebar.css') }}">
    <!-- Main styles for this application-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="{{ asset('css/examples.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/@coreui/chartjs/css/coreui-chartjs.css') }}" rel="stylesheet">


    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('assets/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('assets/datatable/select.bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('assets/datatable/buttons.bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous" />

    <script src="{{ asset('assets/font-awesome/all.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/datatable/jquery.dataTables.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/datatable/dataTables.bootstrap4.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/datatable/dataTables.select.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/datatable/dataTables.buttons.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/datatable/buttons.bootstrap4.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/datatable/dataTables.buttons.html5.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/datatable/jszip.min.js') }}" crossorigin="anonymous"></script>


    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->

    <link rel="stylesheet" href="{{ asset('vendors/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/simplebar.css') }}">
    <!-- Main styles for this application-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="{{ asset('css/examples.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/@coreui/chartjs/css/coreui-chartjs.css') }}" rel="stylesheet">


    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('assets/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="{{ asset('assets/datatable/select.bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('assets/datatable/buttons.bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous" />
@endsection

@section('js')
    <script>
        let boton = document.getElementById('add');

        boton.addEventListener('click', () => {
            window.location.href = "{{ route('servicios.create') }}";
        })
    </script>
    <script src="{{ asset('vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/js/simplebar.min.js') }}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('vendors/chart.js/js/chart.min.js') }}"></script>
    <script src="{{ asset('vendors/@coreui/chartjs/js/coreui-chartjs.js') }}"></script>
    <script src="{{ asset('vendors/@coreui/utils/js/coreui-utils.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>



    <script src="{{ asset('assets/font-awesome/all.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/datatable/jquery.dataTables.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/datatable/dataTables.bootstrap4.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/datatable/dataTables.select.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/datatable/dataTables.buttons.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/datatable/buttons.bootstrap4.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/datatable/dataTables.buttons.html5.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/datatable/jszip.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/js/simplebar.min.js') }}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('vendors/chart.js/js/chart.min.js') }}"></script>
    <script src="{{ asset('vendors/@coreui/chartjs/js/coreui-chartjs.js') }}"></script>
    <script src="{{ asset('vendors/@coreui/utils/js/coreui-utils.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript">
        $('#servicios').dataTable();
    </script>
@endsection
