<?php
include '../Template/header.php';
?>
<br>
<br>
<br> 
<br>
<?php

include("../Modelo/editorial.php");
$id = $_GET['id'];
if ($id == "0") {
    ?>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Registrar Editorial</h3>
            </div>
            <div class="card-body">
                <form action="../Controlador/cleditorial.php" method="POST">
                    <input type="text" class="form-control" name="txtnom" placeholder="Nombre"/>
                    <input type="submit" name="btnnuevo" value="Crear" class="btn btn-success"/>
                </form>
            </div>
        </div>
    </div>
    <?php
} else {
    $res1 = obtenerUsuariosXID($id);
    foreach ($res1 as $row) {
        ?>
        <br>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Modificar Editorial</h3>
                </div>
                <div class="card-body">
                    <form action="../Controlador/cleditorial.php" method="POST">
                        <input type="text" value="<?php echo $id; ?>" name="txtid" hidden=""/>
                        <input type="text" class="form-control" name="txtnom" value="<?php echo $row['EDI_NOMBRE'] ?>"/>
                        <br>                       
                        <input type="submit" name="btnmodificar" value="Modificar" class="btn btn-success"/>
                    </form>
                </div>
            </div>
        </div>
        <?php
        }
        }
 include '../Template/footer.php';    
 ?>


        <?php
        include '../Template/footer.php';
        ?>