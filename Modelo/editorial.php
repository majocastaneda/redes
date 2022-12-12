<?php
include("BD.php");
/*class User{*/
//metodo para listar usuarios
function getEditoriales(){
$sql="SELECT * FROM editorial WHERE EDI_STATUS='A'";
$res=Conectar()->query($sql);
return $res;



}
function obtenerUsuariosXID($id){
//para obtener informacion en el formulario a travez del id
$sql="SELECT * FROM editorial WHERE EDI_ID=$id";
$res=Conectar()->query($sql);
return $res;
}
function createEditorial($nom){
//estado A quemado
//lo unico que cambia es la consulta SQL
$sql="INSERT INTO editorial (EDI_NOMBRE,EDI_STATUS) VALUES('$nom','A')";
$res=Conectar()->query($sql);
return $res;



}
function deleteEditorial($id){

$sql="UPDATE editorial SET EDI_STATUS='I' WHERE EDI_ID=$id";
$res=Conectar()->query($sql);
return $res;
}



function actualizarEditorial($id,$nom){
$sql="UPDATE editorial SET EDI_NOMBRE='$nom' WHERE EDI_ID=$id";
$res=Conectar()->query($sql);
return $res;
}
function selectPerfiles(){
$sql="SELECT * FROM editorial";
$res=Conectar()->query($sql);
return $res;
}
/*}*/
?>