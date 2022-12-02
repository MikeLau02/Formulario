<?php

include './conexion.php';
$con = conexion();

$idp = $_POST["idp"];
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

$sql = "update usuario set 
tipo_documento='$tipo_doc',
documento='$doc',
dv='$dv',
primer_nombre='$pri_nom',
segundo_nombre='$seg_nom',
primer_apellido='$pri_ape',
segundo_apellido='$seg_ape',
fecha_nacimiento='$fecha_nac',
razon_social='$razon_social',
direccion='$dir',
celular='$cel',
telefono='$tel',
email='$email',
tipo_tercero='$tipo_ter' where idusuario='$idp'";

pg_query($con, $sql);

header("location:../vistas/actualizar.php?t=".$idp);

?>