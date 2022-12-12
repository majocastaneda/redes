<?php
include '../Template/header.php';
include("../Modelo/libro.php")
?>
<br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>AUTORES</h3>
            <a href="Libro.php?id=0" class="btn btn-success">Nuevo</a>
        </div>
        <div class="card-body">
            <table class="table table ">
                <tr>
                    <td>NUMERACIÓN</td>
                    <td>EDITORIAL</td>
                    <td>AUTOR</td>
                    <td>TITULO</td>
                    <td>SEGUNDO AUTOR</td>
                    <td>AÑO</td>
                    <td>PRECIO</td>
                    <td>ACCIONES</td>
                </tr>
                <?php
                $resu = getLibros();
                foreach ($resu as $row) {
                    ?>
                    <tr>
                        <td><?php echo $row['LIB_ID']; ?> </td>
                        <td><?php echo $row['EDI_NOMBRE']; ?> </td>
                        <td><?php echo $row['AUT_NOMBRE']; ?> </td>
                        <td><?php echo $row['LIB_TITULO']; ?> </td>
                        <td><?php echo $row['LIB_SEGUNDOAUTOR']; ?> </td>
                        <td><?php echo $row['LIB_ANIO']; ?> </td>
                        <td><?php echo $row['LIB_PRECIO']; ?> </td>
                        <td>
                            <a href="Libro.php?id=<?php echo $row['LIB_ID']; ?>" class="btn btn-secondary">Editar</a>
                            <a href="../Controlador/cllibro.php?id=<?php echo $row['LIB_ID']; ?>" class="btn btn-danger">Eliminar</a>
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