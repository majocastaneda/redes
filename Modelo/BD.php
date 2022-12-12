<?php
echo '-------------------';
echo 'antes de ingresar a la funcion';
echo '-------------------';
function Conectar() {
    echo '-------------------';
echo 'antes de conectar a la bd';
echo '-------------------';
    $link = new mysqli("127.0.0.2:3307", "majo", "Majocast124!", "libreria") or die("Error al conectar a la B.D");
    echo '-------------------';
echo 'el valor de la conexion es:'.$link;
echo '-------------------';
    return $link;
}

 

$mysli = Conectar();

 

?>
