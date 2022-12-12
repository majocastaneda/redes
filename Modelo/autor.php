<?php
include("BD.php");
/*class User{*/
//metodo para listar usuarios
function getAutores(){
$sql="SELECT * FROM autor WHERE AUT_STATUS='A'";
$res=Conectar()->query($sql);
return $res;



}
function obtenerUsuariosXID($id){
//para obtener informacion en el formulario a travez del id
$sql="SELECT * FROM autor WHERE AUT_ID=$id";
$res=Conectar()->query($sql);
return $res;
}
function createAutor($nom,$ape){
//estado A quemado
//lo unico que cambia es la consulta SQL
    
$sql="INSERT INTO autor (AUT_NOMBRE, AUT_APELLIDO, AUT_STATUS) VALUES ('$nom','$ape','A')";
$res=Conectar()->query($sql);
return $res;



}
function deleteAutor($id){

$sql="UPDATE autor SET AUT_STATUS='I' WHERE AUT_ID=$id";
$res=Conectar()->query($sql);
return $res;
}

function  comprobarSiPuedoEliminar($id){
$sql="SELECT AUT_ID FROM libro WHERE LIB_ID=$id";
$resultado=Conectar()->query($sql);
return $resultado;
}

function actualizarAutor($id,$nom,$ape){
$sql="UPDATE autor SET AUT_NOMBRE='$nom', AUT_APELLIDO='$ape' WHERE AUT_ID=$id";
$res=Conectar()->query($sql);
return $res;
}

/*}*/
?>