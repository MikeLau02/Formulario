<?php
include 'conexion.php'; 
$con = conexion();
$id = $_GET["t"];
$sql = "delete from usuario where idusuario='$id'"; pg_query($con, $sql);
header("location:../vistas/visualizar.php");
?>