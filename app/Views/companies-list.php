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
        div.dataTables_wrapper a[type="button"] {
            margin-right: 5px;
        }
        div.dataTables_wrapper a[type="button"]:last-child {
            margin-right: 0px;
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
                                        <h4 class="mb-0">Listado de empresas</h4>
                                        <a type="button" style="margin-left: 15px;" class="btn btn-primary userform" data-bs-toggle="modal" onclick="new_company();" data-bs-target="#companyform"><i class="uil-building"></i> Nueva</a>
                                    </div>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a>Empresas</a></li>
                                            <li class="breadcrumb-item active">Listado</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <table id="companies_list" class="table table-striped table-bordered dt-responsive wrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="modal fade" id="companyform" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
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
                                            <label for="company" class="col-form-label">Nombre de la compañía</label>
                                            <input type="text" class="form-control active" name="company" id="company">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="manager" class="col-form-label">Nombre de la persona responsable</label>
                                            <input type="text" class="form-control active" name="manager" id="manager">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label for="email" class="col-form-label">email de contacto</label>
                                            <input type="email" class="form-control active" name="email" id="email">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="phone" class="col-form-label">Teléfono</label>
                                            <input type="tel" class="form-control active" name="phone" id="phone">
                                        </div>
                                    </div>
                                    <div class="">
                                        <label for="observations" class="col-form-label">Observaciones:</label>
                                        <textarea class="form-control" name="observations" id="observations" style="height: 70px;"></textarea>
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

                <div class="modal fade" id="delcompany" tabindex="-1" aria-labelledby="delLabel" aria-hidden="true">
                    <div class="modal-dialog" style="width: 400px; max-width: 95vw;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="delLabel">Eliminar la empresa</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <div class="col-md-12 mb-2 text-center alert alert-danger" role="alert"><h5>¿Seguro que desea eliminar la empresa<br><span id="delcompanyname"></span> ?</h5></div>
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


<script src="/assets/data/companies_data.js"></script>
<script>
    function new_company() {
        document.querySelector('#editLabel').innerHTML = 'Nueva empresa';
        document.querySelector('input#company').value = '';
        document.querySelector('input#manager').value = '';
        document.querySelector('input#email').value = '';
        document.querySelector('input#phone').value = '';
    }

    function update_data(key) {
        document.querySelector('#editLabel').innerHTML = 'Editar alumno';
        let data = user_data[key];
        document.querySelector('input#company').value = data['company'];
        document.querySelector('input#manager').value = data['manager'];
        document.querySelector('input#email').value = data['email'];
        document.querySelector('input#phone').value = data['phone'];
    }

    function delete_company(key){
        let data = user_data[key];
        console.log(data);
        document.querySelector('#delcompanyname').innerHTML = '<strong>'+data['company']+' '+data['surname']+ '</strong>';
    }

    $(document).ready(function() {

        $('#companies_list').DataTable({
            data: user_data,
            columns: [
                { title: 'Empresa', data: 'company' },
                { title: 'Responsable', data: 'manager' },
                { title: 'email', data: 'email' },
                { title: 'Teléfono', data: 'phone' },
                { title: 'Nº Alum.', data: 'num_students' },
                {
                    "data": null,
                    "render": function ( data, type, row, meta ) {
                        return ''+
                        '<div class="d-flex">'+
                            '<a type="button" onclick="update_data('+meta.row+')" data-bs-toggle="modal" data-bs-target="#companyform"><i class="uil-pen"></i></a>'+
                            '<a type="button" onclick="delete_company('+meta.row+')" data-bs-toggle="modal" data-bs-target="#delcompany"><i class="uil-trash-alt"></i></a>'+
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
                    'width': '1%',
                    targets: [4],
                    className: 'table-center',
                    visible: true
                },
                {
                    'width': '10%',
                    targets: [0,1,2,3],
                    className: 'table-left'
                },
                {
                    'width': '1%',
                    "targets": 'no-sort',
                    "searchable": false,
                    "orderable": false,
                    "visible": true,
                    targets: [5],
                    className: 'table-center'
                }
            ],
            buttons: ['colvis', 'excel', 'pdf', 'print'],
            "dom": "<'row'<'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f><'col-sm-12 col-md-4 buttons'l>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        });


        flatpickr('.flatpickr-date', {
            defaultDate: '01/01/2000',
            dateFormat: "d/m/Y",
            'locale': 'es'
        });


    });
</script>


<script src="assets/js/app.js"></script>

</body>

</html>