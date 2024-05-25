<?php
include 'conexion.php';
$con = conexion();

$id = $_GET["delete"];

$sql = "delete from persona where idpersona='$id'";
pg_query($con, $sql);

header("location: listar.php");

?>