<!doctype html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/head-css') ?>

</head>

<?= $this->include('partials/body') ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->include('partials/menu') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <?= $page_title ?>

                <div class="row mb-4">
                    <div class="col-xl-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="text-center">
                                    <div class="dropdown float-end">
                                        <a class="text-body dropdown-toggle font-size-18" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                            <i class="uil uil-ellipsis-v"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Editar datos</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div>
                                        <img src="assets/images/users/miguel_carmona.jpg" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                    </div>
                                    <h5 class="mt-3 mb-1">Miguel Carmona</h5>
                                    <p class="text-muted">2º DAW</p>
                                </div>

                                <hr class="my-4">

                                <div class="text-muted">
                                    <h4 class="border-bottom-2px">Datos personales</h4>
                                    <div class="table-responsive mt-3">
                                        <div>
                                            <h5 class="font-size-16">Miguel Ángel Carmona Sánchez</h5>
                                            <h5 class="font-size-14">30 de septiembre de 1982 (40 años)</h5>
                                            <h5 class="font-size-14"><a href="tel:666656310">666 656 310</a> | <a href="mailto:info@miguelcarmona.com">info@miguelcarmona.com</a></h5>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-3">

                                <div class="text-muted">
                                    <h4 class="border-bottom-2px">Curso académico</h4>
                                    <div class="table-responsive mt-3">
                                        <div>
                                            <h5 class="font-size-16">CESUR Málaga Este</h5>
                                            <h5 class="font-size-14">2º Desarrollo Aplicaciones Informáticas</h5>
                                            <h5 class="font-size-14">Tutor: <a href="#">Francisco Romero</a></h5>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-3">

                                <div class="text-muted">
                                    <h4 class="border-bottom-2px">Empresa asignada</h4>
                                    <div class="table-responsive mt-3">
                                        <div>
                                            <h5 class="font-size-16">Claroflex</h5>
                                            <h5 class="font-size-14">Responsable: Franisco Oña</h5>
                                            <h5 class="font-size-14"><a href="tel:987654321">987 654 321</a> | <a href="mailto:info@claroflex.com">info@claroflex.com</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8">
                        <div class="card mb-0">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#progress" role="tab">
                                        <i class="uil uil-user-circle font-size-20"></i>
                                        <span class="d-none d-sm-block">Progreso</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#calendar" role="tab">
                                        <i class="uil uil-calender font-size-20"></i>
                                        <span class="d-none d-sm-block">Calendario</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#notifications" role="tab">
                                        <i class="uil uil-envelope-alt font-size-20"></i>
                                        <span class="d-none d-sm-block">Notificaciones</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab content -->
                            <div class="tab-content p-4">
                                <div class="tab-pane active" id="progress" role="tabpanel">
                                    <div>
                                        <div>
                                            <h4 class="font-size-18 border-bottom-2px mb-3 mt-2">Progreso en las prácticas</h4>
                                            <div class="progress progress-xl animated-progess mb-2 p-1" style="height: 1.6rem;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                            </div>
                                            <h5 class="font-size-16">Has completado 117 de 156 horas (19 de 26 días aprox.)</h5>
                                            <p>Comenzaste el día 16 de noviembre y debes acabar el 10 de marzo.</p>
                                        </div>

                                        <div>
                                            <h4 class="font-size-18 border-bottom-2px mb-3 mt-4">Diario de acciones</h4>

                                            <div class="table-responsive">
                                                <table class="table table-wrap table-striped table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Fecha</th>
                                                            <th scope="col">Horas</th>
                                                            <th scope="col">Resumen</th>
                                                            <th scope="col" style="width: 40px;"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>01 Dic 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="uil uil-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Modificar</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>30 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="uil uil-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Modificar</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>29 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="uil uil-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Modificar</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>28 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="uil uil-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Modificar</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>25 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="uil uil-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Modificar</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>24 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="uil uil-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Modificar</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>23 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="uil uil-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Modificar</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>22 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="uil uil-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Modificar</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>21 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="uil uil-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Modificar</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>18 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <a class="text-muted dropdown-toggle font-size-18 px-2" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"><i class="uil uil-ellipsis-v"></i></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <a class="dropdown-item" href="#">Modificar</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="calendar" role="tabpanel">
                                    <div>
                                        <h4 class="font-size-18 border-bottom-2px mb-3 mt-2">Vista de calendario</h4>
                                        <p>Aquí irá un calendario con un resumen de los días que tiene el diario creado, los que no y los festivos (algo así como la siguiente imagen).</p>
                                        <img src="/assets/images/examples/user-profile-calendar.jpg" style="width: 100%" alt="Calendar preview">
                                    </div>
                                </div>
                                <div class="tab-pane" id="notifications" role="tabpanel">
                                    <div>
                                        <div data-simplebar>
                                            
                                            <div class="mt-0"><h4 class="font-size-18 border-bottom-2px mb-3 mt-2">Pendientes</h4></div>

                                            <div class="d-flex align-items-start border-bottom py-4">
                                                <img class="me-2 rounded-circle avatar-xs" src="assets/images/users/francisco-romero.jpg" alt="">
                                                <div class="flex-grow-1">
                                                    <h5 class="font-size-15 mt-0 mb-1">Francisco Romero <small class="text-muted float-end">Hace 2 días</small></h5>
                                                    <p class="text-muted">Te falta por entregar 2 reportes de noviembre</p>
                                                    <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i class="mdi mdi-close-thick"></i> Descartar</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start border-bottom py-4">
                                                <img class="me-2 rounded-circle avatar-xs" src="assets/images/users/avatar-6.jpg" alt="">
                                                <div class="flex-grow-1">
                                                    <h5 class="font-size-15 mt-0 mb-1">Carlos Raigón <small class="text-muted float-end">Hace 3 horas</small></h5>
                                                    <p class="text-muted">Miguel, necesito que me envíes una documentación. Por favor, llámame</p>
                                                    <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i class="mdi mdi-close-thick"></i> Descartar</a>
                                                </div>
                                            </div>

                                            <div class="mt-4"><h4 class="font-size-18 border-bottom-2px mb-3 mt-2">Descartadas</h4></div>
                                            
                                            <div class="d-flex align-items-start border-bottom py-4">
                                                <img class="me-2 rounded-circle avatar-xs" src="assets/images/users/francisco-romero.jpg" alt="">
                                                <div class="flex-grow-1">
                                                    <h5 class="font-size-15 mt-0 mb-1">Francisco Romero <small class="text-muted float-end">Hace 15 días</small></h5>
                                                    <p class="text-muted">Tienes que detallar más los reportes diarios</p>
                                                    <a class="text-muted font-13 d-inline-block">Descartada</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start border-bottom py-4">
                                                <img class="me-2 rounded-circle avatar-xs" src="assets/images/users/avatar-6.jpg" alt="">
                                                <div class="flex-grow-1">
                                                    <h5 class="font-size-15 mt-0 mb-1">Carlos Raigón <small class="text-muted float-end">El mes pasado</small></h5>
                                                    <p class="text-muted">Miguel, sólo para comunicarte que Claroflex ha aceptado y te incorporas la semana que viene</p>
                                                    <a class="text-muted font-13 d-inline-block">Descartada</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?= $this->include('partials/footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?= $this->include('partials/right-sidebar') ?>

<?= $this->include('partials/vendor-scripts') ?>

<script src="assets/js/app.js"></script>

</body>

</html>