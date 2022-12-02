<?php
include '../assets/conexion.php';
$con = conexion();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Usuarios</title>
    <link href="../estilo/estilo.css" rel="stylesheet" type="text/css">
</head>
<body>
<a type="button" class="boton" href="index.php">Registrar</a>
    <main role="main">
        
    <table class="tabla"> 
    <caption><h1>Usuarios registrados</h1></caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Tipo de documento</th>
                <th>N° Documento</th>
                <th>Dv</th>
                <th>Primer nombre</th>
                <th>Segundo nombre</th>
                <th>Primer apellido</th>
                <th>Segundo apellio</th>
                <th>Fecha de nacimiento</th>
                <th>Razón Social</th>
                <th>Dirección</th>
                <th>Celular</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Tipo de tercero</th>
                
                </th>
            </tr>
        </thead>
        <tbody>
<?php
$sql = "SELECT * FROM usuario";
$obj = pg_query($con, $sql);
$i=0;
while ($fila = pg_fetch_array($obj)){
$i++;
?>
            <tr>
                <td><?=$i?></td>
                <td><?=$fila[1]?></td>
                <td><?=$fila[2]?></td>
                <td><?=$fila[3]?></td>
                <td><?=$fila[4]?></td>
                <td><?=$fila[5]?></td>
                <td><?=$fila[6]?></td>
                <td><?=$fila[7]?></td>
                <td><?=$fila[8]?></td>
                <td><?=$fila[9]?></td>
                <td><?=$fila[10]?></td>
                <td><?=$fila[11]?></td>
                <td><?=$fila[12]?></td>
                <td><?=$fila[13]?></td>
                <td><?=$fila[14]?></td>

                <td><a href="./actualizar.php?t=<?=$fila[0]?>"><img src="../imagenes/lapiz.png"/></a></td>
                <td><a href="../assets/eliminar.php?t=<?=$fila[0]?>"><img src="../imagenes/eliminar.png"/></a></td>
                
            </tr>
            <?php
}
?>

        </tbody>
        </table>
        <a type="button" class="boton" href="../pdf/documento_pdf.php">Descargar</a>
        
        
    </main>
</body>


</html>