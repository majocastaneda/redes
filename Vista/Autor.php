<?php
include '../Template/header.php';
?>
<br>
<br>
<br> 
<br>
<?php

include("../Modelo/autor.php");
$id = $_GET['id'];
if ($id == "0") {
    ?>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Registrar Autor</h3>
            </div>
            <div class="card-body">
                <form action="../Controlador/clautor.php" method="POST">
                    <input type="text" class="form-control" name="txtnom" placeholder="Nombre"/>
                    <input type="text" class="form-control" name="txtape" placeholder="Apellido"/>
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
                    <form action="../Controlador/clautor.php" method="POST">
                        <input type="text" value="<?php echo $id; ?>" name="txtid"  />
                        <input type="text" class="form-control" name="txtnom" value="<?php echo $row['AUT_NOMBRE']?>"/>
                         <input type="text" class="form-control" name="txtape" value="<?php echo $row['AUT_APELLIDO']?>"/>
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