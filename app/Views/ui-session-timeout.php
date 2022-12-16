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

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h5 class="mt-0 header-title">Bootstrap-session-timeout</h5>
                                <p class="sub-header">Session timeout and keep-alive control
                                    with a nice Bootstrap warning dialog.</p>

                                <div>
                                    <p>After a set amount of idle time, a Bootstrap warning dialog is shown
                                        to the user with the option to either log out, or stay connected. If
                                        "Logout" button is selected, the page is redirected to a logout URL.
                                        If "Stay Connected" is selected the dialog closes and the session is
                                        kept alive. If no option is selected after another set amount of
                                        idle time, the page is automatically redirected to a set timeout
                                        URL.</p>

                                    <p>
                                        Idle time is defined as no mouse, keyboard or touch event activity registered by the browser.
                                    </p>

                                    <p class="mb-0">
                                        As long as the user is active, the (optional) keep-alive URL keeps
                                        getting pinged and the session stays alive. If you have no need to
                                        keep the server-side session alive via the keep-alive URL, you can
                                        also use this plugin as a simple lock mechanism that redirects to
                                        your lock-session or log-out URL after a set amount of idle time.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

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

<!-- Session timeout js -->
<script src="assets/libs/@curiosityx/bootstrap-session-timeout/index.js"></script>

<!-- Session timeout js -->
<script src="assets/js/pages/session-timeout.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>