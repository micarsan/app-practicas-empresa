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
        div.dataTables_wrapper .table-center {
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
                                        <h4 class="mb-0">Listado de profesores</h4>
                                        <a type="button" style="margin-left: 15px;" class="btn btn-primary userform" data-bs-toggle="modal" onclick="new_user();" data-bs-target="#userform"><i class="uil-user-plus"></i> Nuevo</a>
                                    </div>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a>Profesores</a></li>
                                            <li class="breadcrumb-item active">Listado</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <table id="user_list" class="table table-striped table-bordered dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="modal fade" id="userform" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                    <div class="modal-dialog" style="width: 800px; max-width: 95vw;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editLabel">Editar profesor</h5>
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
                                        <div class="col-md-12 mb-2">
                                            <label for="courses" class="col-form-label">Cursos</label>
                                            <input type="text" class="form-control active" name="courses" id="courses">
                                        </div>
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

                <div class="modal fade" id="deluser" tabindex="-1" aria-labelledby="delLabel" aria-hidden="true">
                    <div class="modal-dialog" style="width: 400px; max-width: 95vw;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="delLabel">Eliminar alumno</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <div class="col-md-12 mb-2 text-center alert alert-danger" role="alert"><h5>¿Seguro que desea eliminar al profesor<br><span id="delusername"></span> ?</h5></div>
                                <div class="col-md-12 mb-2 text-center alert alert-warning">¡Se borrarán todos sus datos asociados!</div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Eliminar</button>
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

<script src="assets/libs/select2/js/select2.min.js"></script>


<script src="/assets/data/teachers_data.js"></script>
<script>
    function new_user() {
        document.querySelector('#editLabel').innerHTML = 'Nuevo profesor';
        document.querySelector('input#name').value = '';
        document.querySelector('input#surname').value = '';
        document.querySelector('input#email').value = '';
        document.querySelector('input#password').value = '';
        document.querySelector('input#courses').value = '';
    }

    function update_data(key) {
        document.querySelector('#editLabel').innerHTML = 'Editar profesor';
        let data = user_data[key];
        document.querySelector('input#name').value = data['name'];
        document.querySelector('input#surname').value = data['surname'];
        document.querySelector('input#email').value = data['email'];
        document.querySelector('input#password').value = data['password'];
        document.querySelector('input#courses').value = data['courses'];
    }

    function delete_user(key){
        let data = user_data[key];
        console.log(data);
        document.querySelector('#delusername').innerHTML = '<strong>'+data['name']+' '+data['surname']+ '</strong>';
    }

    $(document).ready(function() {

        $('#user_list').DataTable({
            data: user_data,
            columns: [
                { title: 'Nombre', data: 'name' },
                { title: 'Apellidos', data: 'surname' },
                { title: 'Cursos', data: 'courses' },
                { title: 'email', data: 'email' },
                {
                    "data": null,
                    "render": function ( data, type, row, meta ) {
                        return ''+
                        '<div class="d-flex">'+
                            '<a type="button" onclick="update_data('+meta.row+')" data-bs-toggle="modal" data-bs-target="#userform"><i class="uil-pen"></i></a>'+
                            '<a type="button" onclick="delete_user('+meta.row+')" data-bs-toggle="modal" data-bs-target="#deluser"><i class="uil-trash-alt"></i></a>'+
                        '</div>';
                    }
                },
            ],
            language: {
                url: 'assets/libs/datatables.net/l10n/es-ES.json'
            },
            lengthChange: true,
            "autoWidth": false,
            //order: [ [2, 'asc'] ],
            "pageLength": 5,
            "lengthMenu": [5, 10, 25, 50, 75, 100],
            "columnDefs": [
                {   
                    'width': '10%',
                    targets: [2],
                    className: 'table-center',
                },
                {
                    'width': '10%',
                    targets: [0,1,3],
                    className: 'table-left'
                },
                {
                    'width': '1%',
                    "targets": 'no-sort',
                    "searchable": false,
                    "orderable": false,
                    "visible": true,
                    targets: 4,
                    className: 'table-center'
                }
            ],
            buttons: ['colvis', 'excel', 'pdf', 'print'],
            "dom": "<'row'<'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f><'col-sm-12 col-md-4 buttons'l>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        });




        // setTimeout(() => {
        //     document.querySelectorAll('.edit').forEach(function(item) {
        //         item.addEventListener('click', function() {
        //             console.log(this.parentNode);

        //         });
        //     });
        // }, "200");

        // Date selector
        flatpickr('.flatpickr-date', {
            defaultDate: '01/01/2000',
            dateFormat: "d/m/Y",
            'locale': 'es'
        });

        // Multiple selector
        $(".select2").select2();


    });
</script>


<script src="assets/js/app.js"></script>

</body>

</html>