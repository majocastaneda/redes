<?php

function Conectar() {
    $link = new mysqli("localhost:3306", "root", "", "libreria") or die("Error al conectar a la B.D");

    return $link;
}

$mysli = Conectar();

?>
