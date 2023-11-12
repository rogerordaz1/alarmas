@extends('layouts.app')

@section('body')
@include('componentes.navbar')

<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    @include('componentes.header')

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Crear Usuario</h3>
                </div>
                <div class="card-body">
                    <form class="pb-5" action="{{ route('users.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Entra el Nombre">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-mail"></i></span>
                                </div>
                                <input type="text" class="form-control" name="email" id="email"
                                    aria-describedby="emailHelp" placeholder="Entre el email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Contraseña">
                        </div>


                        <button type="submit" class="btn btn-primary btn-sm">Crear</button>
                        <a href="{{ route('users.index') }}" type="submit" class="btn btn-secondary btn-sm">Cancelar</a>

                    </form>
                </div>

            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    </div>
@endsection


@section('css')
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
    <link href="{{ asset('assets/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('assets/datatable/select.bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous" />
    <link href="{{ asset('assets/datatable/buttons.bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous" />
@endsection

@section('js')

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



@endsection
