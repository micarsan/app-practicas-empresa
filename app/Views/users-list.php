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
                                        <h4 class="mb-0">Listado de usuarios</h4>
                                        <a type="button" style="margin-left: 15px;" class="btn btn-primary userform" data-bs-toggle="modal" data-bs-target="#userform" data-bs-whatever="@mdo"><i class="uil-user-plus"></i> Nuevo</a>
                                    </div>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a>Usuarios</a></li>
                                            <li class="breadcrumb-item active">Listado</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <table id="reports_table" class="table table-striped table-bordered dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Horas</th>
                                            <th>Resumen</th>
                                            <th class="no-sort"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2022/12/12</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="22/12/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/12/21</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="21/12/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/12/20</td>
                                            <td>7h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="20/12/2022" data-hour="07:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/12/19</td>
                                            <td>5h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="19/12/2022" data-hour="05:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/12/16</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="16/12/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/12/15</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="15/12/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/12/14</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="14/12/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/12/13</td>
                                            <td>7h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="13/12/2022" data-hour="07:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/12/12</td>
                                            <td>7h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="12/12/2022" data-hour="07:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/12/09</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="09/12/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/12/07</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="07/12/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/12/05</td>
                                            <td>4h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="05/12/2022" data-hour="04:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/12/02</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="02/12/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/12/01</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="01/12/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/11/30</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="30/11/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/11/29</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="29/11/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/11/28</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="28/11/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/11/25</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="25/11/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/11/24</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="24/11/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/11/23</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="23/11/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/11/22</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="22/11/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/11/21</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="21/11/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2022/11/18</td>
                                            <td>6h</td>
                                            <td style="white-space: wrap;">Cambiar imagen en una web. Revisar problemas con un diseño. Actualizar contenido de...</td>
                                            <td><a type="button" class="reports-edit" data-bs-toggle="modal" data-bs-target="#report-edit" data-bs-whatever="@mdo" data-date="18/11/2022" data-hour="06:00"><i class="uil-pen"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="modal fade" id="userform" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                    <div class="modal-dialog" style="width: 700px; max-width: 95vw;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editLabel">Editar usuario</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/" method="post">
                                    <div class="mb-3">
                                        <label for="datepicker-date" class="col-form-label">Fecha</label>
                                        <input type="text" class="form-control flatpickr-input active" name="date" id="datepicker-date">
                                    </div>
                                    <div class="mb-3">
                                        <label for="datepicker-hour" class="col-form-label">Horas</label>
                                        <input type="text" class="form-control flatpickr-input active" name="hour" id="datepicker-hour">
                                    </div>
                                    <div class="mb-3">
                                        <label for="reportText" class="col-form-label">Reporte del día:</label>
                                        <textarea class="form-control" name="report" id="reportText" style="height: 150px;">Cambiar imagen en una web.
Revisar problemas con un diseño.
Actualizar contenido de la web principal de la empresa.
Hacer fotocopias.</textarea>
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
    // date selector for dates
    document.querySelectorAll('.reports-edit').forEach(function(item) {
        item.addEventListener('click', function() {
            var date = this.getAttribute('data-date');
            var hour = this.getAttribute('data-hour');

            flatpickr('#datepicker-date', {
                defaultDate: date,
                dateFormat: "d/m/Y",
                'locale': 'es'
            });

            flatpickr('#datepicker-hour', {
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
                time_24hr: true,
                defaultDate: hour
            });
        });
    });

    document.querySelectorAll('.reports-new').forEach(function(item) {
        item.addEventListener('click', function() {
            
            flatpickr('#datepicker-date-new', {
                defaultDate: 'today',
                dateFormat: "d/m/Y",
                'locale': 'es'
            });

            flatpickr('#datepicker-hour-new', {
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
                time_24hr: true,
                defaultDate: '06:00'
            });
        });
    });


    // datatables
    $(document).ready(function() {
        var table = $('#reports_table').DataTable({
            language: {
                url: 'assets/libs/datatables.net/l10n/es-ES.json'
            },
            lengthChange: true,
            "autoWidth": false,
            order: [
                [0, 'desc']
            ],
            "pageLength": 5,
            "lengthMenu": [5, 10, 25, 50, 75, 100],
            "columnDefs": [{
                    'width': '1%',
                    targets: 0,
                    className: 'table-center'
                },
                {
                    'width': '1%',
                    targets: 1,
                    className: 'table-center'
                },
                {
                    'width': '97%'
                },
                {
                    'width': '1%',
                    "targets": 'no-sort',
                    "searchable": false,
                    "orderable": false,
                    "visible": true,
                    targets: 3,
                    className: 'table-center'
                }
            ],
            buttons: ['copy', 'excel', 'pdf', 'print'],
            "dom": "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'f><'col-sm-12 col-md-4 buttons'B>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        });

    });


</script>


<script src="assets/js/app.js"></script>

</body>

</html>