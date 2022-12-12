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
        include("../Modelo/editorial.php");

        if ($_GET) {

// echo "ok";
            $id = $_GET['id'];
            $res = deleteEditorial($id);
            if ($res) {
                echo "<script>
                Swal.fire({
                html:'EDITORIAL ELIMINADA',
                icon:'success'}).then((Value)=>{
                    location.href='../Vista/Editoriales.php'
                    });
                </script>";
            } else {
                echo "<script>
                Swal.fire({
                html:'EDITORIAL NO ELIMINADA',
                icon:'error'}).then((Value)=>{
                    location.href='../Vista/Editoriales.php'
                    });
                </script>";
            }
        }
        
        if (isset($_POST['btnnuevo']) != "") {
    $nom = $_POST['txtnom'];
    $resultado = createEditorial($nom);
    if ($resultado) {
        echo "<script>
                Swal.fire({
                html:'EDITORIAL AGREGADA CON EXITO',
                icon:'success'}).then((Value)=>{
                    location.href='../Vista/Editoriales.php'
                    });
                </script>";
    } else {
        echo "<script>
                Swal.fire({
                html:'ERROR AL AGREGAR',
                icon:'error'}).then((Value)=>{
                    location.href='../Vista/Editoriales.php'
                    });
                </script>";
    }
        }
        
        
    if (isset($_POST['btnmodificar']) != "") {
    $nom = $_POST['txtnom'];
    $id =$_POST['txtid'];

    $resultado = actualizarEditorial($id, $nom);
    if ($resultado) {
        echo "<script>
                Swal.fire({
                html:'REGISTRO MODIFICADO',
                icon:'success'}).then((Value)=>{
                    location.href='../Vista/Editoriales.php'
                    });
                </script>";

    } else {
       echo "<script>
                Swal.fire({
                html:'ERROR AL MODIFICAR',
                icon:'error'}).then((Value)=>{
                    location.href='../Vista/Editoriales.php'
                    });
                </script>";
    }
}
        ?>
    </body>
</html>        
