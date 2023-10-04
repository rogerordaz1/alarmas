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
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            ETECSA PR
            <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#signet"></use>
            </svg>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('index')}}">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                    </svg>Panel de Control</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('alarmas')}}">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                    </svg>Alarmas</a></li>
            <li class="nav-item"><a class="nav-link" href="index.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cog"></use>
                    </svg>Configuracion</a></li>
            <li class="nav-item"><a class="nav-link" href="index.html">
                    <svg class="nav-icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-blur"></use>
                    </svg>Reportes</a></li>



        </ul>
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>


    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                    </svg>
                </button><a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="assets/brand/coreui.svg#full"></use>
                    </svg></a>
                <ul class="header-nav d-none d-md-flex">
                    <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                </ul>


                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown"
                            href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/users.png"
                                    alt="user@email.com"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Account</div>
                            </div><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                                </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                                </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                                </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                                </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Settings</div>
                            </div><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                </svg> Profile</a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                </svg> Settings</a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                                </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a
                                class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                                </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                </svg> Lock Account</a><a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                                </svg> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>




        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                 <!-- /.card.mb-4-->
                 <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                            <div
                                class="card-header position-relative d-flex justify-content-center align-items-center">
                                <svg class="icon icon-3xl text-white my-4">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-airplay"></use>
                                </svg>
                                <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
                                    <canvas id="social-box-chart-1" height="90"></canvas>
                                </div>
                            </div>
                            <div class="card-body row text-center">
                                <div class="col">
                                    <div class="fs-5 fw-semibold">85</div>
                                    <div class="text-uppercase text-medium-emphasis small">UP</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">2</div>
                                    <div class="text-uppercase text-medium-emphasis small">ERROR</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">97.5</div>
                                    <div class="text-uppercase text-medium-emphasis small">%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-lg-4">
                        <div class="card mb-4" style="--cui-card-cap-bg: #00aced">
                            <div
                                class="card-header position-relative d-flex justify-content-center align-items-center">
                                <svg class="icon icon-3xl text-white my-4">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                                </svg>
                                <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
                                    <canvas id="social-box-chart-2" height="90"></canvas>
                                </div>
                            </div>
                            <div class="card-body row text-center">
                                <div class="col">
                                    <div class="fs-5 fw-semibold">104</div>
                                    <div class="text-uppercase text-medium-emphasis small">services</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">1</div>
                                    <div class="text-uppercase text-medium-emphasis small">DOWN</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">97.1</div>
                                    <div class="text-uppercase text-medium-emphasis small">%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-lg-4">
                        <div class="card mb-4" style="--cui-card-cap-bg: #4875b4">
                            <div
                                class="card-header position-relative d-flex justify-content-center align-items-center">
                                <svg class="icon icon-3xl text-white my-4">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
                                </svg>
                                <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
                                    <canvas id="social-box-chart-3" height="90"></canvas>
                                </div>
                            </div>
                            <div class="card-body row text-center">
                                <div class="col">
                                    <div class="fs-5 fw-semibold">2</div>
                                    <div class="text-uppercase text-medium-emphasis small">PENDIENTE(S)</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">230</div>
                                    <div class="text-uppercase text-medium-emphasis small">COMPLETADO</div>
                                </div>
                                <div class="vr"></div>
                                <div class="col">
                                    <div class="fs-5 fw-semibold">12.3 min</div>
                                    <div class="text-uppercase text-medium-emphasis small">RESPUESTA</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                </div>

                <div class="table-responsive">
                    <table class="table border mb-0">
                        <thead class="table-light fw-semibold">
                            <tr class="align-middle">
                                <th class="text-center" width="10%">
                                    <svg class="icon">
                                        <use
                                            xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people">
                                        </use>
                                    </svg>
                                </th>
                                <th width="25%">User</th>

                                <th width="40%">Usage</th>

                                <th width="5%"> &nbsp;</th>


                                <th width="20%">Activity</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="align-middle">
                                <td class="text-center">
                                    <div class="avatar avatar-md"><img class="avatar-img"
                                            src="assets/img/users.png" alt="user@email.com"><span
                                            class="avatar-status bg-success"></span></div>
                                </td>
                                <td>
                                    <div>Iran Rogriguez Moreno</div>
                                    <div class="small text-medium-emphasis">
                                        Administrador de Red</div>
                                </td>

                                <td>
                                    <div class="clearfix">
                                        <div class="float-start">
                                            <div class="fw-semibold">100%</div>
                                        </div>
                                        <div class="float-end"></div>
                                    </div>
                                    <div class="progress progress-thin">
                                        <div class="progress-bar bg-success" role="progressbar"
                                            style="width: 1000%" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td></td>

                                <td>
                                    <div class="small text-medium-emphasis">Tiempo de Respuesta</div>
                                    <div class="fw-semibold">21.4 min</div>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td class="text-center">
                                    <div class="avatar avatar-md"><img class="avatar-img"
                                            src="assets/img/users.png" alt="user@email.com"><span
                                            class="avatar-status bg-danger"></span></div>
                                </td>
                                <td>
                                    <div>Javier Diaz Serrano</div>
                                    <div class="small text-medium-emphasis">
                                        Administrador de Red</div>
                                </td>

                                <td>
                                    <div class="clearfix">
                                        <div class="float-start">
                                            <div class="fw-semibold">100%</div>
                                        </div>
                                        <div class="float-end"></div>
                                    </div>
                                    <div class="progress progress-thin">
                                        <div class="progress-bar bg-success" role="progressbar"
                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <td></td>
                                <td>
                                    <div class="small text-medium-emphasis">Tiempo de Respuesta</div>
                                    <div class="fw-semibold">11.2 min</div>
                                </td>

                            </tr>
                            <tr class="align-middle">
                                <td class="text-center">
                                    <div class="avatar avatar-md"><img class="avatar-img"
                                            src="assets/img/users.png" alt="user@email.com"><span
                                            class="avatar-status bg-danger"></span></div>
                                </td>
                                <td>
                                    <div>Mesa de Ayuda</div>
                                    <div class="small text-medium-emphasis"><span>New</span> |
                                        Especialista de Guardia</div>
                                </td>

                                <td>
                                    <div class="clearfix">
                                        <div class="float-start">
                                            <div class="fw-semibold">100%</div>
                                        </div>
                                        <div class="float-end"></div>
                                    </div>
                                    <div class="progress progress-thin">
                                        <div class="progress-bar bg-success" role="progressbar"
                                            style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                    <div class="small text-medium-emphasis">Tiempo de Respuesta</div>
                                    <div class="fw-semibold">20.3 min</div>
                                </td>

                            </tr>
                        </tbody>

                    </table>
                </div>

                <div class="row mt-5">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white bg-danger">
                            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fs-4">Servidor Web</div>
                                    <div>PING : 40d</div>
                                    <div>WWW: Down 125ms</div>
                                </div>

                            </div>
                            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">

                            </div>
                        </div>
                    </div>
                    <!-- /.col-->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white bg-info">
                            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fs-4">Servidor Web</div>
                                    <div>PING : 40d</div>
                                    <div>WWW: Down 125ms</div>
                                </div>

                            </div>
                            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white bg-info">
                            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fs-4">Servidor Web</div>
                                    <div>PING : 40d</div>
                                    <div>WWW: Down 125ms</div>
                                </div>

                            </div>
                            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card mb-4 text-white bg-info">
                            <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fs-4">Servidor Web</div>
                                    <div>PING : 40d</div>
                                    <div>WWW: Down 125ms</div>
                                </div>

                            </div>
                            <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">

                            </div>
                        </div>
                    </div>
                </div>


                <!-- /.row-->

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

</body>

</html>
