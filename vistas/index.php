<!doctype html>
<html lang="es">

<head>
    <title>Registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../estilo/estilo.css" rel="stylesheet" type="text/css">
</head>

<body class="body">

    <main>
        <a type="button" class="boton" href="./visualizar.php" id="button">Lista de usuarios</a>
        <form class="formulario" autocomplete="off" action="../assets/index_post.php" method="post">

            <h1> FORMULARIO </h1>

            <label>Tipo de identificación (*)</label>
            <select class="lista" name="tipo_doc" required>
                <option value=""> Selecciona identificación </option>
                <option>Cédula</option>
                <option>NIT</option>
            </select>

            <label>N° de identificación (*)</label>
            <input class="caja_texto" placeholder="Ingrese su número de identificación..." type="tex" name="doc"
                maxlength="100" required>

            <label>Dv (*)</label>
            <input class="caja_texto" placeholder="Ingrese su Dv..." type="tex" name="dv" maxlength="2" required>

            <label>Primer nombre (*)</label>
            <input class="caja_texto" placeholder="Escriba su primer nombre..." type="tex" name="pri_nom"
                maxlength="100" required>

            <label>Segundo nombre</label>
            <input class="caja_texto" placeholder="Escriba su segundo nombre..." type="tex" name="seg_nom" maxlength="100">

            <label>Primer apellido (*)</label>
            <input class="caja_texto" placeholder="Escriba su primer apellido..." type="tex" name="pri_ape" maxlength="100" required>

            <label>Segundo apellido</label>
            <input class="caja_texto" placeholder="Escriba su segundo apellido..." type="tex" name="seg_ape" maxlength="100">

            <label>Fecha de nacimiento (*)</label>
            <input class="caja_texto" placeholder="DD/M/AA" type="date" name="fecha_nac" required>

            <label>Razón social (*)</label>
            <input class="caja_texto" placeholder="Razón social..." type="tex" name="razon_social" maxlength="100" required>

            <label>Dirección (*)</label>
            <input class="caja_texto" placeholder="Ingrese su dirección..." type="tex" name="dir" maxlength="100" required>

            <label>Celular (*)</label>
            <input class="caja_texto" placeholder="Ingrese su celular..." type="tex" name="cel" maxlength="50" required>

            <label>Teléfono (*)</label>
            <input class="caja_texto" placeholder="Ingrese su teléfono..." type="tex" name="tel" maxlength="50" required>

            <label>Correo electrónico (*)</label>
            <input class="caja_texto" placeholder="Ingrese su email..." type="tex" name="email" maxlength="100" required>

            <label>Tipo de tercero (*)</label>
            <select class="lista" name="tipo_ter" required>
                <option value=""> Selecciona tipo de tercero </option>
                <option>Cliente</option>
                <option>Proveedor</option>
            </select>

            <input type="submit" class="boton" value="Registrar">

        </form>
    </main>
</body>

</html>