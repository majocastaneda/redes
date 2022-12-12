<?php

function Conectar() {
    $link = new mysqli("192.168.100.59", "root", "Majocast124!", "libreria") or die("Error al conectar a la B.D");

    return $link;
}

$mysli = Conectar();

?>
