<?php   
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/plantilla.css">
    <link rel="stylesheet" href="../public/fontawesome/css/all.css">
    <link rel="stylesheet" href="../public/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../public/datatable/responsive.bootstrap4.min.css">
    <link rel="shortcut icon" sizes="76x76" href="../public/img/apple-icon-76x76.png">
    <link rel="" href="favicon.png">
    <title>Hekp-Desk</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
        <div class="container">
            <a class="navbar-brand" href="inicio.php">Help-Desk</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="inicio.php"><span class="fas fa-house-user"></span> Inicio </a>
                    </li>
                    <?php if ($_SESSION['usuario']['rol'] == 1){ ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="misDispositivos.php"><span class="fas fa-chalkboard-teacher"></span> Mis dispositivos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="misReportes.php"><span class="fas fa-address-book"></span> Reportes Soporte</a>
                    </li>
                    <?php }else if($_SESSION['usuario']['rol'] == 2){ ?>
                    <!--Aqui son las vistas del admin-->
                    <li class="nav-item active">
                        <a class="nav-link" href="usuarios.php"> <span class="fas fa-users"></span> Usuarios</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="asignacion.php"><span class="fas fa-pen"></span> Asignacion</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="reportes.php"><span class="fas fa-clipboard"></span> Reportes</a>
                    </li>
                    <?php } ?>
                    <li class="nav-item dropdown" style="color:red">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:red">
                            Usuario: <?php echo  $_SESSION['usuario']['nombre'];  ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"> <span class="fas fa-users-cog"></span> Editar Datos</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../procesos/usuarios/login/salir.php"> <span class="fas fa-sign-out-alt"></span> Salir</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>