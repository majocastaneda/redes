<?php
include '../Template/header.php';
include("../Modelo/editorial.php")

?>
<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>EDITORIALES</h3>
            <a href="Editorial.php?id=0" class="btn btn-success">Nuevo</a>
        </div>
        <div class="card-body">
            <table class="table table ">
                <tr>
                    <td>NUMERACIÓN</td>
                    <td>NOMBRE</td>
                    <td>ACCIONES</td>
                </tr>
                <?php
                $resu = getEditoriales();
                foreach ($resu as $row) {
                    ?>
                    <tr>
                        <td><?php echo $row['EDI_ID']; ?> </td>
                        <td><?php echo $row['EDI_NOMBRE']; ?> </td>
                        
                        <td>
                            <a href="Editorial.php?id=<?php echo $row['EDI_ID']; ?>" class="btn btn-secondary">Editar</a>
                            <a href="../Controlador/cleditorial.php?id=<?php echo $row['EDI_ID']; ?>" class="btn btn-danger">Eliminar</a>
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