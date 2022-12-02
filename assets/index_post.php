<?php

include './conexion.php';
$con = conexion();

$tipo_doc = $_POST["tipo_doc"];
$doc = $_POST["doc"];
$dv = $_POST["dv"];
$pri_nom = $_POST["pri_nom"];
$seg_nom = $_POST["seg_nom"];
$pri_ape = $_POST["pri_ape"];
$seg_ape = $_POST["seg_ape"];
$fecha_nac = $_POST["fecha_nac"];
$razon_social = $_POST["razon_social"];
$dir = $_POST["dir"];
$cel = $_POST["cel"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$tipo_ter = $_POST["tipo_ter"];

$sql = "insert into usuario values(default,
'$tipo_doc',
'$doc',
'$dv',
'$pri_nom',
'$seg_nom',
'$pri_ape',
'$seg_ape',
'$fecha_nac',
'$razon_social',
'$dir',
'$cel',
'$tel',
'$email',
'$tipo_ter')";

pg_query($con, $sql);
header("location:../vistas/index.php");


?>