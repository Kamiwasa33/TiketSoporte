<!DOCTYPE html>
<HTML lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MODIFICARTIKETS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    </head>
    <body>
        <h2><?php echo $data["titulo"]; ?></h2>
        <a class="btn btn-outline-primary" role="button" href="index.php"> <i class="bi bi-house-door"></i> PRINCIPAL</a>
        <p></p>
        <form id="modificar" name="modificar" method="POST" action="index.php?c=tikets&a=actualizar" autocomplete="off">
        <table whdth="80%">
            <tbody>
                <tr><td><INPUT type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>"></INPUT>
                <tr><td>TITULO: </td><td><INPUT type="text" id="Titulo" name="Titulo" value="<?php echo $data["tiket"]["Titulo"]; ?>"></INPUT></td></tr>
                <tr><td>NOMBRE: </td><td><INPUT type="text" id="Nombre" name="Nombre" value="<?php echo $data["tiket"]["Nombre"]; ?>"></INPUT></td></tr>
                <tr><td>MENSAJE: </td><td><INPUT type="text" id="Mensaje" name="Mensaje" value="<?php echo $data["tiket"]["Mensaje"]; ?>"></INPUT></td></tr>
                <tr><td>TELEFONO: </td><td><INPUT type="tel" id="Telefono" name="Telefono" value="<?php echo $data["tiket"]["Telefono"]; ?>"></INPUT></td></tr>
                <tr><td>MAIL: </td><td><INPUT type="email" id="Mail" name="Mail" value="<?php echo $data["tiket"]["Mail"]; ?>"></INPUT></td></tr>
                <tr><td>ESTATUS: </td><td><INPUT type="text" id="Estatus" name="Estatus" value="<?php echo $data["tiket"]["Estatus"]; ?>"></INPUT></td></tr>
            </tbody>
        </table>
        <p></p>
        <button class="btn btn-success" id="guardar" name="guardar" type="submit">Guardar</button>
        </form>
    </body>
</html>
