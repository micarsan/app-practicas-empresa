<!doctype html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/head-css') ?>

    <style>
        .social-list-item {
            height: 2.5rem;
            width: 2.5rem;
            line-height: calc(2.5rem - 2px);
            font-size: 1.5rem;
        }
    </style>
</head>

<body class="authentication-bg">

    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="/" class="mb-5 d-block auth-logo">
                            <img src="assets/images/logo-dark.png" alt="" height="22" class="logo logo-dark">
                            <img src="assets/images/logo-light.png" alt="" height="22" class="logo logo-light">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">

                        <div class="card-body p-4">
                            <div class="text-center mb-4 mt-2">
                                <h5 class="text-primary">¡Bienvenido!</h5>
                                <p class="text-muted">Acceda con sus datos</p>
                            </div>
                            <?php if( isset($_GET['incorrect-data']) ): ?>
                                <div class="alert alert-danger text-center" role="alert">Datos incorrectos</div>
                            <?php endif; ?>
                            <div class="p-2 mt-2">
                                <form action="/" method="post">

                                    <div class="mb-3">
                                        <label class="form-label" for="username">Usuario o email</label>
                                        <input type="text" class="form-control" name="user" id="username" placeholder="usuario o email">
                                    </div>

                                    <div class="mb-3">
                                        <div class="float-end">
                                            <a href="auth-recoverpw" class="text-muted">¿Recordar contraseña?</a>
                                        </div>
                                        <label class="form-label" for="userpassword">Contraseña</label>
                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="contraseña">
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="remember" id="auth-remember-check">
                                        <label class="form-check-label" for="auth-remember-check">Recuérdame</label>
                                    </div>

                                    <div class="mt-3 text-end">
                                        <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">Acceder</button>
                                    </div>



                                    <div class="mt-4 text-center">
                                        <div class="signin-other-title">
                                            <h5 class="font-size-14 mb-3 title">Acceder con:</h5>
                                        </div>


                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item bg-primary text-white border-primary">
                                                    <i class="mdi mdi-microsoft-teams"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                                                    <i class="mdi mdi-github"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="javascript:void()" class="social-list-item bg-secondary text-white border-secondary">
                                                    <i class="mdi mdi-microsoft-windows"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <div class="mt-5 text-center">
                        <p>© <script>document.write(new Date().getFullYear())</script> <a href="https://miguelcarmona.com">Miguel Carmona</a> </p>
                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <?= $this->include('partials/vendor-scripts') ?>

    <script src="assets/js/app.js"></script>

</body>

</html>