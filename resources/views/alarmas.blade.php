<!DOCTYPE html><!--
    * CoreUI - Free Bootstrap Admin Template
    * @version v4.2.2
    * @link https://coreui.io/product/free-bootstrap-admin-template/
    * Copyright (c) 2023 creativeLabs Łukasz Holeczek
    * Licensed under MIT (https://github.com/coreui/coreui-free-bootstrap-admin-template/blob/main/LICENSE)
    --><!-- Breadcrumb-->
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Alarmas</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/favicon/android-icon-192x192.png') }}">
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

</head>

<body>

    @include('componentes.navbar')

    <div class="wrapper d-flex flex-column min-vh-100 bg-light">

        @include('componentes.header')
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <!-- /.card.mb-4-->
                <h1 class="display-3">Alarmas</h1>

                <div id="datatable-buttons"></div>

                <div class="table-responsive">
                    <table class="table border mb-0" id="alarm_table_id">
                        <thead class="table-light fw-semibold">
                            <tr class="align-middle">
                                <th class="text-center" width="5%">
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-asterisk-circle">
                                        </use>
                                    </svg>
                                </th>
                                <th width="20%">Host</th>
                                <th width="20%">Servicio</th>
                                <th width="15%">Inicio</th>
                                <th width="15%">Final</th>
                                <th width="15%">Respuesta</th>
                                <th width="15%">Estado</th>
                                <th width="10%"></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bitacoras as $bitacora)
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            @if ($bitacora->estado->estado == 'Bien')
                                                <svg class="icon text-success">
                                                    <use
                                                        xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-check-circle') }}">
                                                    </use>
                                                </svg>
                                            @else
                                                <svg class="icon text-danger">
                                                    <use
                                                        xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-asterisk-circle') }}">
                                                    </use>
                                                </svg>
                                            @endif

                                        </div>
                                    </td>
                                    <td>
                                        <div>{{ $bitacora->equipo->nombre }}</div>
                                    </td>
                                    <td>
                                        <div>{{ $bitacora->servicio->nombre }}</div>
                                    </td>
                                    <td>
                                        <div>{{ $bitacora->fecha_inicio }}</div>
                                    </td>
                                    <td>
                                        <div>{{ $bitacora->fecha_final }}</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">{{ $bitacora->respuesta }}</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">{{ $bitacora->estado->estado }}</div>
                                    </td>
                                    <td>
                                        <a href="{{ route('alarmas.edit', $bitacora->id) }}">
                                            <svg class="icon text-dark">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach




                        </tbody>

                    </table>
                </div>






            </div>
        </div>
    </div>
    <footer class="footer">
        <div><a href="">ETECSA PR </a><a href="">Todos los derechos reservados</a>
        </div>
        <div class="ms-auto">Presentado por&nbsp;<a href="https://coreui.io/docs/">ETECSA</a></div>
    </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/js/simplebar.min.js') }}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('vendors/chart.js/js/chart.min.js') }}"></script>
    <script src="{{ asset('vendors/@coreui/chartjs/js/coreui-chartjs.js') }}"></script>
    <script src="{{ asset('vendors/@coreui/utils/js/coreui-utils.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script></script>
    <script type="text/javascript">
        let table = $('#alarm_table_id').dataTable({
            dom: "B<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
                "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            responsive: true,
            autoWidth: false,
            buttons: [

                {
                    extend: 'excel',
                    text: 'Excel',
                    titleAttr: 'Exportar a EXCEL',
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5]
                    },
                },
            ],
        });
    </script>
</body>
