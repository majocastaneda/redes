<?php

function Conectar() {
    $link = new mysqli("locathost", "root", "Majocast124!", "libreria") or die("Error al conectar a la B.D");

    return $link;
}

$mysli = Conectar();

?>
