@extends('layouts.app')

@section('body')

    @include('componentes.navbar')

    {{--  --}}
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">

        @include('componentes.header')


        {{-- Body --}}

        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <!-- /.card.mb-4-->
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                            <div class="card-header position-relative d-flex justify-content-center align-items-center">
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
                            <div class="card-header position-relative d-flex justify-content-center align-items-center">
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
                            <div class="card-header position-relative d-flex justify-content-center align-items-center">
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
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people">
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
                                    <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/users.png"
                                            alt="user@email.com"><span class="avatar-status bg-success"></span></div>
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
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 1000%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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
                                    <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/users.png"
                                            alt="user@email.com"><span class="avatar-status bg-danger"></span></div>
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
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                <td></td>
                                <td>
                                    <div class="small text-medium-emphasis">Tiempo de Respuesta</div>
                                    <div class="fw-semibold">11.2 min</div>
                                </td>

                            </tr>
                            <tr class="align-middle">
                                <td class="text-center">
                                    <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/users.png"
                                            alt="user@email.com"><span class="avatar-status bg-danger"></span></div>
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
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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


        @include('componentes.footer')
    </div>
@endsection
