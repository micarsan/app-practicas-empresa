<!doctype html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/head-css') ?>

    <style>
        table.table-wrap a {
            font-size: 1.2rem;
        }

    </style>

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
                                            <a class="dropdown-item" href="#">Cambiar contraseña</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div>
                                        <img src="assets/images/users/<?php echo $user_data['avatar']; ?>" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                    </div>
                                    <h5 class="mt-3 mb-1">Francisco Romero</h5>
                                    <p class="text-muted">CESUR Málaga este</p>
                                </div>

                                <hr class="my-4">

                                <div class="text-muted">
                                    <h4 class="border-bottom-2px">Datos personales</h4>
                                    <div class="table-responsive mt-3">
                                        <div>
                                            <h5 class="font-size-16">Francisco Romero</h5>
                                            <h5 class="font-size-14">27 de julio de 1977 (45 años)</h5>
                                            <h5 class="font-size-14"><a href="tel:987654321">987 654 321</a> | <a href="mailto:francisco@franciscoromero.com">francisco@franciscoromero.com</a></h5>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-3">

                                <div class="text-muted">
                                    <h4 class="border-bottom-2px">Centro académico</h4>
                                    <div class="table-responsive mt-3">
                                        <div>
                                            <h5 class="font-size-16">CESUR Málaga Este</h5>
                                            <h5 class="font-size-14">Inscrito en: 1ºDAW | 2ºDAW | 1ºDAM | 2ºDAW</h5>
                                            <h5 class="font-size-14">Asignaturas: BDD, JS, Ent. Cli, PHP, Sistemas</h5>
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
                                            <h4 class="font-size-18 border-bottom-2px mb-3 mt-2">Progreso en el curso académico</h4>
                                            <div class="progress progress-xl animated-progess mb-2 p-1" style="height: 1.6rem;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">1ª evaluación</div>
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 0%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">2ª evaluación</div>
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 0%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">3ª evaluación</div>
                                            </div>
                                            <h5 class="font-size-16">Has completado 68 de 204 días lectivos restantes.</h5>
                                            <p>Comenzó el día 16 de septiembre y debe acabar el 10 de junio.</p>
                                        </div>

                                        <div>
                                            <h4 class="font-size-18 border-bottom-2px mb-3 mt-4">Últimos reportes subidos por sus alumnos</h4>

                                            <div class="table-responsive">
                                                <table class="table table-wrap table-striped table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Alumno</th>
                                                            <th scope="col">Fecha</th>
                                                            <th scope="col">Horas</th>
                                                            <th scope="col">Resumen</th>
                                                            <th scope="col" style="width: 20px;"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Miguel Carmona</td>
                                                            <td>01 Dic 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td><a type="button" href="/reports?student=34" style="color: inherit;"><i class="uil-eye"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Miguel Carmona</td>
                                                            <td>30 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td><a type="button" href="/reports?student=34" style="color: inherit;"><i class="uil-eye"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Miguel Carmona</td>
                                                            <td>29 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td><a type="button" href="/reports?student=34" style="color: inherit;"><i class="uil-eye"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Miguel Carmona</td>
                                                            <td>28 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td><a type="button" href="/reports?student=34" style="color: inherit;"><i class="uil-eye"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Miguel Carmona</td>
                                                            <td>25 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td><a type="button" href="/reports?student=34" style="color: inherit;"><i class="uil-eye"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Miguel Carmona</td>
                                                            <td>24 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td><a type="button" href="/reports?student=34" style="color: inherit;"><i class="uil-eye"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Miguel Carmona</td>
                                                            <td>23 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td><a type="button" href="/reports?student=34" style="color: inherit;"><i class="uil-eye"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Miguel Carmona</td>
                                                            <td>22 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td><a type="button" href="/reports?student=34" style="color: inherit;"><i class="uil-eye"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Miguel Carmona</td>
                                                            <td>21 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td><a type="button" href="/reports?student=34" style="color: inherit;"><i class="uil-eye"></i></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Miguel Carmona</td>
                                                            <td>18 Nov 2022</th>
                                                            <td>6h</td>
                                                            <td>Cambiar imagen en una web. Revisar problemas con un diseño...</td>
                                                            <td><a type="button" href="/reports?student=34" style="color: inherit;"><i class="uil-eye"></i></a></td>
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
                                        <p>Aquí irá un calendario para detallar eventos como festivos, inicios/fin de prácticas, días que no estén creados los reportes de 
                                            todos sus alumnos asignados y otras opciones que puedan ser útiles (algo así como se ve en la imagen siguiente)
                                        </p>
                                        <img src="/assets/images/examples/teacher-profile-calendar.png" style="width: 100%" alt="Calendar preview">
                                    </div>
                                </div>
                                <div class="tab-pane" id="notifications" role="tabpanel">
                                    <div>
                                        <div data-simplebar>
                                            
                                            <div class="mt-0"><h4 class="font-size-18 border-bottom-2px mb-3 mt-2">Pendientes</h4></div>

                                            <div class="d-flex align-items-start border-bottom py-4">
                                                <img class="me-2 rounded-circle avatar-xs" src="assets/images/users/miguel_carmona.jpg" alt="">
                                                <div class="flex-grow-1">
                                                    <h5 class="font-size-15 mt-0 mb-1">Miguel Carmona <small class="text-muted float-end">Hace 2 días</small></h5>
                                                    <p class="text-muted">Los actualizo y se los subo cuanto antes.</p>
                                                    <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i class="mdi mdi-close-thick"></i> Descartar</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start border-bottom py-4">
                                                <img class="me-2 rounded-circle avatar-xs" src="assets/images/users/avatar-6.jpg" alt="">
                                                <div class="flex-grow-1">
                                                    <h5 class="font-size-15 mt-0 mb-1">Carlos Raigón <small class="text-muted float-end">Hace 3 horas</small></h5>
                                                    <p class="text-muted">Francisco, tenemos que hablar sobre un alumno. Llámame cuando puedas</p>
                                                    <a href="javascript: void(0);" class="text-muted font-13 d-inline-block"><i class="mdi mdi-close-thick"></i> Descartar</a>
                                                </div>
                                            </div>

                                            <div class="mt-4"><h4 class="font-size-18 border-bottom-2px mb-3 mt-2">Descartadas</h4></div>
                                            
                                            <div class="d-flex align-items-start border-bottom py-4">
                                                <img class="me-2 rounded-circle avatar-xs" src="assets/images/users/avatar-7.jpg" alt="">
                                                <div class="flex-grow-1">
                                                    <h5 class="font-size-15 mt-0 mb-1">Antonio Sánchez <small class="text-muted float-end">Hace 15 días</small></h5>
                                                    <p class="text-muted">Estoy cansado de sólo hacer fotocopias en esta empresa</p>
                                                    <a class="text-muted font-13 d-inline-block">Descartada</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-start border-bottom py-4">
                                                <img class="me-2 rounded-circle avatar-xs" src="assets/images/users/avatar-4.jpg" alt="">
                                                <div class="flex-grow-1">
                                                    <h5 class="font-size-15 mt-0 mb-1">Eva María <small class="text-muted float-end">El mes pasado</small></h5>
                                                    <p class="text-muted">Necesito que hablemos sobre mis funciones en la empresa en la que estoy porque...</p>
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