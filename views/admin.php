<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="mazer/css/bootstrap.css">
    <link rel="stylesheet" href="mazer/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="mazer/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="mazer/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="mazer/vendors/choices.js/choices.min.css" />
    <link rel="stylesheet" href="mazer/css/app.css">

    <link rel="stylesheet" href="css/site.css" />

    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet">

</head>
<body>


    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <a href="index.html"><img src="mazer/images/logo/logoF.png" alt="Logo" srcset="" style="height: 3rem;"></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  ">
                            <a href="/Home/Index" class='sidebar-link'>
                                <i class="bi bi-person"></i>
                                <span>Usuarios</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="/Ruta/Index" class='sidebar-link'>
                                <i class="bi bi-signpost"></i>
                                <span>Rutas</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="/Cliente/Index" class='sidebar-link'>
                                <i class="bi bi-wallet2"></i>
                                <span>Clientes</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="/Producto/Index" class='sidebar-link'>
                                <i class="bi bi-box"></i>
                                <span>Productos</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="/Festivo/Index" class='sidebar-link'>
                                <i class="bi bi-calendar2-date"></i>
                                <span>Festivos</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="/Plantilla/Index" class='sidebar-link'>
                                <i class="bi bi-table"></i>
                                <span>Plantillas</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="/Planificacion/Index" class='sidebar-link'>
                                <i class="bi bi-calendar-check"></i>
                                <span>Planificación</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="/Cobro/Index" class='sidebar-link'>
                                <i class="bi bi-cash"></i>
                                <span>Cobros</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="/Reparto/Index" class='sidebar-link'>
                                <i class="bi bi-truck"></i>
                                <span>Reparto</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-list"></i>
                                <span>Informes</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="component-alert.html">Diario</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-alert.html">Mensual</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-badge.html">Impagos</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-badge.html">Recaudación</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>


                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>

            </div>
        </div>
        <div id="main">

            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            @RenderBody()

        </div>
    </div>
    <script src="mazer/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="mazer/js/bootstrap.bundle.min.js"></script>
    <script src="mazer/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="mazer/vendors/choices.js/choices.min.js"></script>
    <script src="mazer/js/main.js"></script>


    <script src="lib/jquery/dist/jquery.min.js"></script>
    <script src="lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/site.js" asp-append-version="true"></script>
    

</body>
</html>
