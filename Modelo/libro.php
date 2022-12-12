<?php
include("BD.php");
/*class User{*/
//metodo para listar usuarios
function getLibros(){
$sql="SELECT * 
FROM libro 
	INNER JOIN autor
    On libro.LIB_ID = autor.AUT_ID
  	INNER JOIN editorial
    On autor.AUT_ID=editorial.EDI_ID
    WHERE libro.LIB_STATUS='A';
    ";
$res=Conectar()->query($sql);
return $res;



}
function obtenerUsuariosXID($id){
//para obtener informacion en el formulario a travez del id
$sql="SELECT * FROM autor WHERE AUT_ID=$id";
$res=Conectar()->query($sql);
return $res;
}
function createLibros($tit,$autor2, $ani, $pre, $autor,$editorial){
//estado A quemado
//lo unico que cambia es la consulta SQL
    
$sql="INSERT INTO libro(EDI_ID, AUT_ID, LIB_TITULO, LIB_SEGUNDOAUTOR, LIB_ANIO, LIB_PRECIO, LIB_STATUS) VALUES ('$editorial','$autor','$tit','$autor2','$ani','$pre','A')";
$res=Conectar()->query($sql);
return $res;



}
function deleteLibros($id){

$sql="UPDATE libro SET LIB_STATUS='I' WHERE LIB_ID=$id";
$res=Conectar()->query($sql);
return $res;
}



function actualizarLibros($id,$nom,$ape){
$sql="UPDATE autor SET AUT_NOMBRE='$nom', AUT_APELLIDO='$ape' WHERE AUT_ID=$id";
$res=Conectar()->query($sql);
return $res;
}

function selectAutor(){
    $sql ="SELECT * FROM autor";
    $res= Conectar()->query($sql);
    return $res;
}
function selectEditorial(){
    $sql ="SELECT * FROM editorial";
    $res= Conectar()->query($sql);
    return $res;
}
?>