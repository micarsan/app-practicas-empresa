<!doctype html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />


    <!-- plugin css -->
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/libs/@chenfengyuan/datepicker/datepicker.min.css">

    <!-- datepicker css -->
    <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">

    <style>
        div.dataTables_wrapper .row:first-child {
            padding-bottom: 12px;
            align-items: center;
        }

        div.dataTables_wrapper .row:first-child label {
            margin-bottom: 0px;
        }

        div.dataTables_wrapper th,
        div.dataTables_wrapper div.table-center {
            text-align: center;
        }

        div.dataTables_wrapper div.dataTables_filter {
            text-align: center !important;
            margin: 10px auto;
        }

        div.dataTables_wrapper div.buttons {
            text-align: right;
        }

        div.dataTables_wrapper a[type="button"] {
            font-size: 1.2rem;
        }
        div.dataTables_wrapper a[type="button"]:first-child {
            margin-right: 5px;
        }

    </style>

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

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="d-flex align-items-center">
                                        <h4 class="mb-0">Listado de alumnos</h4>
                                        <a type="button" style="margin-left: 15px;" class="btn btn-primary userform" data-bs-toggle="modal" data-bs-target="#userform" data-bs-whatever="@mdo"><i class="uil-user-plus"></i> Nuevo</a>
                                    </div>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a>Alumnos</a></li>
                                            <li class="breadcrumb-item active">Listado</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <table id="users_table" class="table table-striped table-bordered dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>DNI</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Empresa</th>
                                            <th>Tutor</th>
                                            <th>F. Nac.</th>
                                            <th>email</th>
                                            <th>Teléfono</th>
                                            <th>DUAL</th>
                                            <th>FCT</th>
                                            <th class="no-sort"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                            <td>123456789A</td>
                                            <td>Antonio Manuel</td>
                                            <td>Antúnez Morales</td>
                                            <td>Empresa 1</td>
                                            <td>Francisco Romero</td>
                                            <td>30/09/1982</td>
                                            <td>miguel@dualapp.miguelcarmona.com</td>
                                            <td>987 654 321</td>
                                            <td>327h</td>
                                            <td>165h</td>
                                            <td><div class="d-flex">
                                                <a type="button" class="edit" data-bs-toggle="modal" data-bs-target="#userform" data-bs-whatever="@mdo"><i class="uil-pen"></i></a>
                                                <a type="button" class="delete" data-bs-toggle="modal"><i class="uil-trash-alt"></i></a>
                                            </div></td>
                                        </tr>
                                        <tr>
                                            <td>123456789A</td>
                                            <td>Antonio Manuel</td>
                                            <td>entúnez Morales</td>
                                            <td>Empresa 1</td>
                                            <td>Francisco Romero</td>
                                            <td>30/09/1982</td>
                                            <td>miguel@dualapp.miguelcarmona.com</td>
                                            <td>987 654 321</td>
                                            <td>327h</td>
                                            <td>165h</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="22/12/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>123456789A</td>
                                            <td>Antonio Manuel</td>
                                            <td>Antúnez Morales</td>
                                            <td>Empresa 1</td>
                                            <td>Francisco Romero</td>
                                            <td>30/09/1982</td>
                                            <td>miguel@dualapp.miguelcarmona.com</td>
                                            <td>987 654 321</td>
                                            <td>327h</td>
                                            <td>165h</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="22/12/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>123456789A</td>
                                            <td>Antonio Manuel</td>
                                            <td>Antúnez Morales</td>
                                            <td>Empresa 1</td>
                                            <td>Francisco Romero</td>
                                            <td>30/09/1982</td>
                                            <td>miguel@dualapp.miguelcarmona.com</td>
                                            <td>987 654 321</td>
                                            <td>327h</td>
                                            <td>165h</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="22/12/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>123456789A</td>
                                            <td>Antonio Manuel</td>
                                            <td>Antúnez Morales</td>
                                            <td>Empresa 1</td>
                                            <td>Francisco Romero</td>
                                            <td>30/09/1982</td>
                                            <td>miguel@dualapp.miguelcarmona.com</td>
                                            <td>987 654 321</td>
                                            <td>327h</td>
                                            <td>165h</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="22/12/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="modal fade" id="userform" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                    <div class="modal-dialog" style="width: 800px; max-width: 95vw;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editLabel">Editar alumno</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/" method="post">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="name" class="col-form-label">Nombre</label>
                                            <input type="text" class="form-control active" name="name" id="name">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="surname" class="col-form-label">Apellidos</label>
                                            <input type="text" class="form-control active" name="surname" id="surname">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="email" class="col-form-label">email</label>
                                            <input type="email" class="form-control active" name="email" id="email">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="password" class="col-form-label">Contraseña</label>
                                            <input type="password" class="form-control active" name="password" id="password">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="birthday" class="col-form-label">Fecha de nacimiento</label>
                                            <input type="text" class="form-control flatpickr-date active" name="birthday" id="birthday">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="dni" class="col-form-label">DNI</label>
                                            <input type="text" class="form-control active" name="dni" id="dni">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="phone" class="col-form-label">Teléfono</label>
                                            <input type="tel" class="form-control active" name="phone" id="phone">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="teacher" class="col-form-label">Profesor asignado</label>
                                            <select class="form-select" name="teacher">
                                                <option>Francisco Romero</option>
                                                <option>Victor Manuel Navarro</option>
                                                <option>José Carlos Márquez</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="company" class="col-form-label">Empresa</label>
                                            <select class="form-select" id="company">
                                                <option>Empresa 1</option>
                                                <option>Empresa 2</option>
                                                <option>Empresa 3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="dual" class="col-form-label">Horas a cursar DUAL</label>
                                            <input type="number" class="form-control active" name="dual" id="dual">
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <label for="fct" class="col-form-label">Horas a cursar FCT</label>
                                            <input type="number" class="form-control active" name="fct" id="fct">
                                        </div>
                                    </div>
                                    <div class="">
                                        <label for="reportText" class="col-form-label">Observaciones:</label>
                                        <textarea class="form-control" name="report" id="reportText" style="height: 70px;"></textarea>
                                    </div>


                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="report-new" tabindex="-1" aria-labelledby="newLabel" aria-hidden="true">
                    <div class="modal-dialog" style="width: 700px; max-width: 95vw;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="newLabel">Nuevo reporte</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/" method="post">
                                    <div class="mb-3">
                                        <label for="datepicker-date" class="col-form-label">Fecha</label>
                                        <input type="text" class="form-control flatpickr-input active" name="date" id="datepicker-date-new">
                                    </div>
                                    <div class="mb-3">
                                        <label for="datepicker-hour" class="col-form-label">Horas</label>
                                        <input type="text" class="form-control flatpickr-input active" name="hour" id="datepicker-hour-new">
                                    </div>
                                    <div class="mb-3">
                                        <label for="reportText" class="col-form-label">Reporte del día:</label>
                                        <textarea class="form-control" name="report" id="reportText" style="height: 150px;"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>


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

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>


<script src="assets/libs/select2/js/select2.min.js"></script>
<script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="assets/libs/@chenfengyuan/datepicker/datepicker.min.js"></script>

<!-- datepicker js -->
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="assets/libs/flatpickr/l10n/es.js"></script>


<script>
    // date / hour selector
    $(document).ready(function() {

        flatpickr('.flatpickr-date', {
            defaultDate: '01/01/2000',
            dateFormat: "d/m/Y",
            'locale': 'es'
        });

        document.querySelectorAll('.edit').forEach(function(item) {
            item.addEventListener('click', function() {
                console.log(this.parentNode.parentNode.parentNode);

            });
        });


    });




    // datatables
    $(document).ready(function() {
        var table = $('#users_table').DataTable({
            language: {
                url: 'assets/libs/datatables.net/l10n/es-ES.json'
            },
            lengthChange: true,
            "autoWidth": false,
            order: [
                [2, 'asc']
            ],
            "pageLength": 5,
            "lengthMenu": [5, 10, 25, 50, 75, 100],
            "columnDefs": [
                {   
                    'width': '5%',
                    targets: [0,5,8,9],
                    className: 'table-center',
                    visible: false
                },
                {
                    'width': '10%',
                    targets: [1,2,3,4,6,7],
                    className: 'table-left'
                },
                {
                    'width': '1%',
                    "targets": 'no-sort',
                    "searchable": false,
                    "orderable": false,
                    "visible": true,
                    targets: 10,
                    className: 'table-center'
                }
            ],
            buttons: ['colvis', 'excel', 'pdf', 'print'],
            "dom": "<'row'<'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f><'col-sm-12 col-md-4 buttons'l>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        });

    });
</script>


<script src="assets/js/app.js"></script>

</body>

</html>