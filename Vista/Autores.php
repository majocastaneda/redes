<?php
include '../Template/header.php';
include("../Modelo/autor.php")
?>
<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>AUTORES</h3>
            <a href="Autor.php?id=0" class="btn btn-success">Nuevo</a>
        </div>
        <div class="card-body">
            <table class="table table ">
                <tr>
                    <td>NUMERACIÓN</td>
                    <td>NOMBRE</td>
                    <td>APELLIDO</td>
                    <td>ACCIONES</td>
                </tr>
                <?php
                $resu = getAutores();
                foreach ($resu as $row) {
                    ?>
                    <tr>
                        <td><?php echo $row['AUT_ID']; ?> </td>
                        <td><?php echo $row['AUT_NOMBRE']; ?> </td>
                        <td><?php echo $row['AUT_APELLIDO']; ?> </td>
                        <td>
                            <a href="Autor.php?id=<?php echo $row['AUT_ID']; ?>" class="btn btn-secondary">Editar</a>
                            <a href="../Controlador/clautor.php?id=<?php echo $row['AUT_ID']; ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php }
                ?>
            </table>
        </div>
    </div>
</div>
<?php
include("../Template/footer.php");
?>