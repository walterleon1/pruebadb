<?php
include 'conexion.php';
$con = conexion();

$idp = $_POST["idp"];
$doc = $_POST["doc"];
$nom = $_POST["nom"];
$ape = $_POST["ape"];
$dir = $_POST["dir"];
$cel = $_POST["cel"];


$sql = "update persona set documento='$doc', nombre='$nom', apellido='$ape', direccion='$dir', celular='$cel' where idpersona= '$idp'";
$dbconn = pg_pconnect("dbname=dbprueba");
pg_query($con, $sql);
header("location:actualizar.php?update=".$idp);
?>