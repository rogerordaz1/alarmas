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
        
        
        <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous"/>
        <link href="{{ asset('assets/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous"/>
        <link href="{{ asset('assets/datatable/select.bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous"/>
        <link href="{{ asset('assets/datatable/buttons.bootstrap4.min.css') }}" rel="stylesheet" crossorigin="anonymous"/>

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
        <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
            <div class="sidebar-brand d-none d-md-flex">
                ETECSA PR
                <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
                    <use xlink:href="assets/brand/coreui.svg#signet"></use>
                </svg>
            </div>
            <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
            <li class="nav-item">
                <a class="nav-link" href="{{route('index')}}">
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
                        <li class="nav-item"><a class="nav-link" href="#">&nbsp;</a></li>
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
                    <h1 class="display-3">Alarmas</h1>

                    <div class="table-responsive">
                        <table class="table border mb-0" id="alarm_table_id">
                            <thead class="table-light fw-semibold">
                                <tr class="align-middle">
                                    <th class="text-center" width="5%">
                                        <svg class="icon">
                                            <use
                                                xlink:href="vendors/@coreui/icons/svg/free.svg#cil-asterisk-circle">
                                            </use>
                                        </svg>
                                    </th>
                                    <th width="20%">Host</th>
                                    <th width="20%">Servicio</th>
                                    <th width="15%">Inicio</th>
                                    <th width="15%">Final</th>
                                    <th width="15%">Respuesta</th>
                                    <th width="10%"></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-danger">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-asterisk-circle">
                                                </use>
                                            </svg>
                                        </div>
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-04 08:32:15</div>
                                    </td>
                                    <td>
                                        <div>. . .</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">. . .</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-danger">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-asterisk-circle">
                                                </use>
                                            </svg>
                                        </div>
                                    </td>
                                    <td>
                                        <div>SWRespaldo</div>                                        
                                    </td>
                                    <td>
                                        <div>PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-04 08:32:45</div>
                                    </td>
                                    <td>
                                        <div>. . .</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">. . .</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-03 08:35:15</div>
                                    </td>
                                    <td>
                                        <div>2023-09-03 08:36:23</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 8s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>

                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-02 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-02 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-03 09:12:32</div>
                                    </td>
                                    <td>
                                        <div>2023-09-03 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 21s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-03 09:15:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-03 09:16:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-03 10:10:13</div>
                                    </td>
                                    <td>
                                        <div>2023-09-03 10:11:33</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 20s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-03 11:15:45</div>
                                    </td>
                                    <td>
                                        <div>2023-09-03 11:17:05</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 20s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-03 12:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-03 12:13:50</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 16s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-03 12:15:30</div>
                                    </td>
                                    <td>
                                        <div>2023-09-03 12:16:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 23s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-03 12:20:12</div>
                                    </td>
                                    <td>
                                        <div>2023-09-03 12:21:30</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 18s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-01 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-02 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-02 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-02 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-02 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td class="text-center">
                                        <div class="fw-semibold">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-check-alt">
                                                </use>
                                            </svg>
                                        </div>                                    
                                    </td>
                                    <td>
                                        <div>ServerWeb</div>                                        
                                    </td>
                                    <td>
                                        <div>WWW, PING</div>  
                                    </td>
                                    <td>
                                        <div>2023-09-02 09:12:34</div>
                                    </td>
                                    <td>
                                        <div>2023-09-02 09:13:53</div>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">1 min - 19s</div>
                                    </td>
                                    <td>
                                        <a href="" class="">
                                            <svg class="icon text-dark">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options">
                                                </use>
                                            </svg>
                                        </a>                                    
                                    </td>
                                </tr>

                            </tbody>

                        </table>
                    </div>





                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>Placeholder text for this demonstration of a vertically centered modal dialog.</p>
                              </div>
                              <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="button">Save changes</button>
                              </div>
                            </div>
                          </div>
                    </div>
                    <button class="btn btn-primary" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModalCenter">Vertically centered modal</button>
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
            $('#alarm_table_id').dataTable();
        </script>
    </body>

    </html>
