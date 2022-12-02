<?php
include '../assets/conexion.php';
$con = conexion();
$id = $_GET["t"];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Actualizar</title>
    <link href="../estilo/estilo.css" rel="stylesheet" type="text/css">

</head>

<body class="body">
    <a class="boton" href="index.php">Registrar </a>

    <?php
$sql = "select * from usuario where idusuario='$id'";
$obj = pg_query($con, $sql);
$fila = pg_fetch_array($obj);

$tipo_doc = $fila[1];
$doc = $fila[2];
$dv = $fila[3];
$pri_nom = $fila[4];
$seg_nom = $fila[5];
$pri_ape = $fila[6];
$seg_ape = $fila[7];
$fecha_nac = $fila[8];
$razon_social = $fila[9];
$dir = $fila[10];
$cel = $fila[11];
$tel = $fila[12];
$email = $fila[13];
$tipo_ter = $fila[14];
?>

    <form class="formulario" autocomplete="off" action="../assets/actualizar-post.php" method="post">
            <h1> ACTUALIZACIÓN </h1>

        <label>Tipo de identificación (*)</label>
            <select class="lista" name="tipo_doc" required value="<?=$tipo_doc?>">
                <option><?=$tipo_doc?></option>
                <option>Cédula</option>
                <option>NIT</option>
            </select>
            <input type="hidden" name="idp" value="<?=$id?>">

            <label>N° de identificación (*)</label>
            <input class="caja_texto" type="text" name="doc"maxlength="8" value="<?=$doc?>">

            <label>Dv (*)</label>
            <input class="caja_texto" type="text" name="dv" value="<?=$dv?>">

            <label>Primer nombre (*)</label>
            <input class="caja_texto" type="text" name="pri_nom" value="<?=$pri_nom?>">

            <label>Segundo nombre</label>
            <input class="caja_texto" type="text" name="seg_nom" value="<?=$seg_nom?>">

            <label>Primer apellido (*)</label>
            <input class="caja_texto" type="text" name="pri_ape" value="<?=$pri_ape?>">

            <label>Segundo apellido</label>
            <input class="caja_texto" type="text" name="seg_ape" value="<?=$seg_ape?>">

            <label>Fecha de nacimiento (*)</label>
            <input class="caja_texto" type="date" name="fecha_nac" value="<?=$fecha_nac?>">

            <label>Razón social (*)</label>
            <input class="caja_texto" type="text" name="razon_social" value="<?=$razon_social?>">

            <label>Dirección (*)</label>
            <input class="caja_texto" type="text" name="dir" value="<?=$dir?>">

            <label>Celular (*)</label>
            <input class="caja_texto" type="text" name="cel" value="<?=$cel?>">

            <label>Teléfono (*)</label>
            <input class="caja_texto" type="text" name="tel" value="<?=$tel?>">

            <label>Correo electrónico (*)</label>
            <input class="caja_texto" type="text" name="email" value="<?=$email?>">

            <label>Tipo de tercero (*)</label>
            <select class="lista" name="tipo_ter" value="<?=$tipo_ter?>" required>
                <option> <?=$tipo_ter?> </option>
                <option>Cliente</option>
                <option>Proveedor</option>
            </select>

        </div>
        <input class="boton" type="submit" value="Actualizar">
        <a class="boton" type="button" href="./visualizar.php">Volver a la lista</a>
    </form>
    </main>
</body>

</html>