<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <link rel="stylesheet" href="sweetalert2.min.css">
    </head>
    <body>
        <?php
        include("../Modelo/autor.php");

        if ($_GET) {

// echo "ok";
            $id = $_GET['id'];
            $res = deleteAutor($id);
            if ($res) {
                echo "<script>
                Swal.fire({
                html:'AUTOR ELIMINADO',
                icon:'success'}).then((Value)=>{
                    location.href='../Vista/Autores.php'
                    });
                </script>";
            } else {
                echo "<script>
                Swal.fire({
                html:'AUTOR NO ELIMINADO',
                icon:'error'}).then((Value)=>{
                    location.href='../Vista/Autores.php'
                    });
                </script>";
            }
        }
        
        if (isset($_POST['btnnuevo']) != "") {
    $nom = $_POST['txtnom'];
     $ape = $_POST['txtape'];
    $resultado = createAutor($nom,$ape);
    if ($resultado) {
        echo "<script>
                Swal.fire({
                html:'AUTOR AGREGADO CON EXITO',
                icon:'success'}).then((Value)=>{
                    location.href='../Vista/Autores.php'
                    });
                </script>";
    } else {
        echo "<script>
                Swal.fire({
                html:'ERROR AL AGREGAR',
                icon:'error'}).then((Value)=>{
                    location.href='../Vista/Autores.php'
                    });
                </script>";
    }
        }
        
        
    if (isset($_POST['btnmodificar']) != "") {
    $nom = $_POST['txtnom'];
    $ape = $_POST['txtape'];
    $id =$_POST['txtid'];

    $resultado = actualizarAutor($id, $nom,$ape);
    if ($resultado) {
        echo "<script>
                Swal.fire({
                html:'AUTOR MODIFICADO',
                icon:'success'}).then((Value)=>{
                     location.href='../Vista/Autores.php'
                    });
                </script>";

    } else {
       echo "<script>
                Swal.fire({
                html:'ERROR AL MODIFICAR',
                icon:'error'}).then((Value)=>{
                    location.href='../Vista/Autores.php'
                    });
                </script>";
    }
}
        ?>
    </body>
</html>        
