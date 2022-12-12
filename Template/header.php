<?php
session_start();
@$perfil = $_SESSION['perfil'];
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



        <title>Practica php</title>
    </head>
    <body>

        <?php if (@$perfil == 1) { ?>



            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">ADMINISTRADOR</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Mantenimientos
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../Vista/Editoriales.php">Editoriales</a></li>
                                    <li><a class="dropdown-item" href="../Vista/Autores.php">Autores</a></li>
                                    <li><a class="dropdown-item" href="../Vista/Libros.php">Libros</a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Reglas del Negocio
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Compras</a></li>
                                    <li><a class="dropdown-item" href="#">Ventas</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Reportes
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Productos</a></li>
                                    <li><a class="dropdown-item" href="#">Usuarios</a></li>
                                    <li><a class="dropdown-item" href="#">Clientes</a></li>
                                    <li><a class="dropdown-item" href="#">Productos mas vendidos</a></li>
                                    <li><a class="dropdown-item" href="#">Proveedores</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex" action="../Controlador/salir.php" method="POST">
                            <input class="btn btn-outline-success" type="submit" value="Salir">
                        </form>
                    </div>
                </div>
            </nav>





        <?php }
        if (@$perfil == 2 || @$perfil == 3) {
            ?>
            <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">VENDEDOR</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Mantenimientos
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../Vista/Autores.php">Autores</a></li>
                                    <li><a class="dropdown-item" href="../Vista/Libros.php">Libros</a></li>
                              
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Reglas del Negocio
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Compras</a></li>
                                    <li><a class="dropdown-item" href="#">Ventas</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Reportes
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Productos</a></li>
                                    <li><a class="dropdown-item" href="#">Usuarios</a></li>
                                    <li><a class="dropdown-item" href="#">Clientes</a></li>
                                    <li><a class="dropdown-item" href="#">Productos mas vendidos</a></li>
                                    <li><a class="dropdown-item" href="#">Proveedores</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex" action="../Controlador/salir.php" method="POST">
                            <input class="btn btn-outline-success" type="submit" value="Salir">
                        </form>
                    </div>
                </div>
            </nav>






            <?php
        }?>