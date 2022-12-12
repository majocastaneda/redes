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
        session_start();
        include '../Modelo/BD.php';

        if (isset($_POST['btnIngresar']) != null) {
            $correo = $_POST['txtemail'];
            $clave = $_POST['txtclave'];
            $sql = "SELECT * FROM USUARIO WHERE USU_CORREO='$correo' AND USU_CLAVE='$clave'";

            $result = Conectar()->query($sql);
            foreach ($result as $row) {
                $perfil = $row['USU_ID'];
            }
            $_SESSION['perfil'] = $perfil;
            if (@$perfil) {
                switch (@$perfil) {
                    case 1:
                        echo "<script>
                Swal.fire({
                html:'ADMINISTRADOR',
                icon:'success'}).then((Value)=>{
                    location.href='../Vista/Libros.php'
                    });
                </script>";
                        break;
                    case 2:
                        echo "<script>
                Swal.fire({
                html:'VENDEDOR 1',
                icon:'success'}).then((Value)=>{
                    location.href='../Vista/inicio.php'
                    });
                </script>";
                        break;
                    case 3:
                        echo "<script>
                Swal.fire({
                html:'VENDEDOR 2',
                icon:'success'}).then((Value)=>{
                    location.href='../Vista/inicio.php'
                    });
                </script>";
                }
            } else {
                echo"<script>
                Swal.fire({
                html:'ACCESO DENEGADO',
                icon:'error'}).then((Value)=>{
                    location.href='../index.php'
                    });
                </script>";
            }
        }
        ?>
    </body>
</html>        
