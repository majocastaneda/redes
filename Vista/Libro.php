<?php
include '../Template/header.php';
?>
<br>
<br>
<br> 
<br>
<?php
include("../Modelo/libro.php");
$id = $_GET['id'];
if ($id == "0") {
    ?>
    <br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Registrar Libro</h3>
            </div>
            <div class="card-body">
                <form action="../Controlador/cllibro.php" method="POST">

                    <input type="text" class="form-control" name="txttit" placeholder="Titulo"/>
                    <input type="text" class="form-control" name="autor2" placeholder="Segundo Autor"/>
                    <input type="text" class="form-control" name="txtani" placeholder="Año"/>
                    <input type="text" class="form-control" name="txtpre" placeholder="Precio"/>
                    
                    <select class="form-control" name="cbautor">
                        <option>Seleccionar un autor</option>
                        <?php
                        $res = selectAutor();
                        foreach ($res as $row) {
                            ?>
                            <option value="<?php echo $row['AUT_ID']; ?>"><?php echo $row['AUT_NOMBRE']; ?></option>
                        <?php }
                        ?>
                    </select>
                    <select class="form-control" name="cbeditorial">
                        <option>Seleccionar una editorial</option>
                        <?php
                        $res = selectEditorial();
                        foreach ($res as $row) {
                            ?>
                            <option value="<?php echo $row['EDI_ID']; ?>"><?php echo $row['EDI_NOMBRE']; ?></option>
                        <?php }
                        ?>
                            
                    </select>
                    
                    
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
                        <input type="text" class="form-control" name="txtnom" value="<?php echo $row['AUT_NOMBRE'] ?>"/>
                        <input type="text" class="form-control" name="txtape" value="<?php echo $row['AUT_APELLIDO'] ?>"/>
                           <input type="text" class="form-control" name="txtnom" value="<?php echo $row['AUT_TITULO'] ?>"/>
                        <input type="text" class="form-control" name="txtape" value="<?php echo $row['AUT_ANIO'] ?>"/>
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