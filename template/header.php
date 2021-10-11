<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f7d57bfcae.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <header class="navbar navbar-expand-lg fixed-top navbar-dark sticky-top flex-md-nowrap bg-primary p-2">
        <div class="container-fluid">
            <h1 class="d-flex align-items-center fs-4 text-white mb-0">
                <img src="" width="35" height="35" class="d-inline-block align-top me-2" alt="">
                <div id="user">Scouts</div>
            </h1>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="../pages/home.php">
                            <i class="fas fa-home" aria-hidden="true"></i> 
                            Inicio
                        </a>
                    </li>
                    <li id="rifa" class="nav-item ">
                        <a class="nav-link" href="../pages/profile.php">
                            <i class="fas fa-user-alt" aria-hidden="true"></i>
                            Perfil
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-cog" aria-hidden="true"></i> 
                            Opciones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#">Option 1</a></li>
                          <li><a class="dropdown-item" href="#">Option 2</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Option 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">
                            <i class="fas fa-sign-out-alt" aria-hidden="true"></i> 
                            Cerrar Sesion
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">