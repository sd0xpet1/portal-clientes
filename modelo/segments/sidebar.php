    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
                <img src="../modelo/assets/img/marca/icon-wardify.png" alt="Logo de Wardify" width="45">
                <div class="sidebar-brand-text mx-3">Wardify<sup>®</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-building"></i>
                    <span>Empresas Registradas</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Empresas Registradas</h6>
                        <a class="collapse-item" href="ver-empresa.php">Ver Todas</a>
                        <a class="collapse-item" data-toggle="modal" data-target="#exampleModal" onclick="window.location.href = 'registrar-empresa.php';">Registrar una Nueva</a>

                    </div>
                </div>


            </li>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="bi bi-clipboard-data-fill"></i>
                    <span>Gestión MIPER+C</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gestión MIPER+C:</h6>
                        <a class="collapse-item" href="ver-miper.php">MIPER+C Generadas</a>
                        <a class="collapse-item" onclick="window.location.href = 'registrar-miper.php';"> Generar MIPER+C</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3"
                    aria-expanded="true" aria-controls="collapse3">
                    <i class="bi bi-person-fill"></i>
                    <span>Nuevo colaborador</span>
                </a>
                <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Nuevo colaborador</h6>
                        <a class="collapse-item" href="ver-colaborador.php" >Ver Colaboradores</a>
                        <a class="collapse-item" onclick="window.location.href = 'registrar-colaborador.php';"> Nuevo colaborador</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4"
                    aria-expanded="true" aria-controls="collapse4">
                    <i class="bi bi-briefcase"></i>
                    <span>Gestión de Cargos</span>
                </a>
                <div id="collapse4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Desarollo Laboral</h6>
                        <a class="collapse-item" href="ver-cargos.php">Ver Cargos</a>
                        <a class="collapse-item" onclick="window.location.href = 'registrar-cargo.php';">Crea nuevo Cargo</a>
                    </div>
                </div>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5"
                    aria-expanded="true" aria-controls="collapse5">
                    <i class="bi bi-box-seam"></i>
                    <span>Investigación Incidentes</span>
                </a>
                <div id="collapse5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gestión de Incidentes </h6>
                        <a class="collapse-item" href="ver-incidentes.php">Ver Investigaciones</a>
                        <a class="collapse-item" onclick="window.location.href = 'registrar-incidente.php';">Nuevo Incidente</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse6"
                    aria-expanded="true" aria-controls="collapse6">
                    <i class="bi bi-pin-fill"></i>
                    <span>Gestión de Terreno</span>
                </a>
                <div id="collapse6" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gestión de Terreno</h6>
                        <a class="collapse-item" href="ver-gestion.php">Ver Gestión</a>
                        <a class="collapse-item" onclick="window.location.href = 'registrar-gestion.php';">Realiza tu check list</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse7"
                    aria-expanded="true" aria-controls="collapse7">
                    <i class="bi bi-file-earmark-bar-graph-fill"></i>
                    <span>Mis Estadísticas</span>
                </a>
                <div id="collapse7" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gestión Estadística</h6>
                        <a class="collapse-item" href="ver-estadistica.php">Ver Mis Estadísticas</a>
                        <a class="collapse-item" onclick="window.location.href = 'registrar-estadistica-quincenal.php';">Estadística Quincenal</a>
                        <a class="collapse-item" onclick="window.location.href = 'registrar-estadistica-mensual.php';">Estadística Mensual</a>
                        <a class="collapse-item" onclick="window.location.href = 'registrar-estadistica-anual.php';">Estadística Anual</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse8"
                    aria-expanded="true" aria-controls="collapse8">
                    <i class="bi bi-archive-fill"></i>
                    <span>Capacitaciones</span>
                </a>
                <div id="collapse8" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Entrenamiento</h6>
                        <a class="collapse-item" href="ver-capacitacion.php">Ver Capacitaciones</a>
                        <a class="collapse-item" onclick="window.location.href = 'registrar-capacitacion.php';">Agendar Capacitación</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Contenido Descargable
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fbi bi-sign-stop-lights"></i>
                    <span>Señaletica de Seguridad</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Contenido:</h6>
                        <a class="collapse-item" href="##">Señalética de orientacion</a>
                        <a class="collapse-item" href="##">Señalética de informacion</a>
                        <a class="collapse-item" href="##">Señalética de prohibicion</a>
                        <a class="collapse-item" href="##">Señalética de advertencia</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">¿No lo encontraste?</h6>
                        <a class="collapse-item text-danger" href="##">Solicitalo aqui</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <div class="sidebar-heading">
                Contenido Virtual
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2"
                    aria-expanded="true" aria-controls="collapsePages2">
                    <i class="bi bi-journal-bookmark-fill"></i>
                    <span>Biblioteca SSO</span>
                </a>
                <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Contenido:</h6>
                        <a class="collapse-item" href="##">Enciclopedia OIT</a>
                        <a class="collapse-item" href="##">Libros de seguridad <br> 
                                                            y salud ocupacional</a>
                        <a class="collapse-item" href="##">Legislación Chilena <br>
                                                            en SSO</a>
                        <a class="collapse-item" href="##">Normas ISO y otras</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">¿No lo encontraste?</h6>
                        <a class="collapse-item text-danger" href="##">Solicitalo aqui</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="coete.png" alt="...">
                <p class="text-center mb-2"><strong>
                    Wardify Pro </strong>Te permite usar toda la <strong>experiencia</strong> warify sin limite alguno!!</p>
                <a class="btn btn-success btn-sm" href="##">Obten Wardify Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->