<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="30">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="28">
            </span>
        </a>

        <a href="/" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="30">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="28">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                    
                <?php if ($GLOBALS['user_data']['rol'] == 'teacher') : ?>
                    <li>
                        <a href="/teacher-profile"> <i class="uil-user-circle"></i> <span>Mi perfil</span></a>
                    </li>
                    <li>
                        <a href="chat">
                            <i class="uil-comments-alt"></i>
                            <span class="badge rounded-pill bg-warning float-end">2</span>
                            <span><?= lang('Files.Chat') ?></span>
                        </a>
                    </li>
                    <li class="menu-title">Administración</li>
                    <li>
                        <a href="/students-list"> <i class="uil-users-alt"></i> <span>Alumnos</span></a>
                    </li>
                    <li>
                        <a href="/companies-list"> <i class="uil-building"></i> <span>Empresas</span></a>
                    </li>
                    <li>
                        <a href="/teachers-list"> <i class="uil-users-alt"></i> <span>Profesores</span></a>
                    </li>
                <?php else : ?>
                    <li>
                        <a href="/student-profile"> <i class="uil-user-circle"></i> <span>Mi perfil</span></a>
                    </li>
                    <li>
                        <a href="/reports"> <i class="uil-file-copy-alt"></i> <span>Reportes</span></a>
                    </li>
                    <li>
                        <a href="chat">
                            <i class="uil-comments-alt"></i>
                            <span class="badge rounded-pill bg-warning float-end">2</span>
                            <span><?= lang('Files.Chat') ?></span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->