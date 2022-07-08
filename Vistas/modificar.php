<!DOCTYPE html>
<HTML>
    <head>
        <title>TIKETS</title>
    </head>
    <body>
        <h2><?php echo $data["titulo"]; ?></h2>
        <a href="Index.php">PRINCIPAL</a>
        <p></p>
        <form id="modificar" name="modificar" method="POST" action="index.php?c=tikets&a=actualizar" autocomplete="off">
        <table whdth="80%">
            <tbody>
                <tr><td><INPUT type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>"></INPUT>
                <tr><td>TITULO: </td><td><INPUT type="text" id="Titulo" name="Titulo" value="<?php echo $data["tiket"]["Titulo"]; ?>"></INPUT></td></tr>
                <tr><td>NOMBRE: </td><td><INPUT type="text" id="Nombre" name="Nombre" value="<?php echo $data["tiket"]["Nombre"]; ?>"></INPUT></td></tr>
                <tr><td>MENSAJE: </td><td><INPUT type="text" id="Mensaje" name="Mensaje" value="<?php echo $data["tiket"]["Mensaje"]; ?>"></INPUT></td></tr>
                <tr><td>TELEFONO: </td><td><INPUT type="text" id="Telefono" name="Telefono" value="<?php echo $data["tiket"]["Telefono"]; ?>"></INPUT></td></tr>
                <tr><td>MAIL: </td><td><INPUT type="text" id="Mail" name="Mail" value="<?php echo $data["tiket"]["Mail"]; ?>"></INPUT></td></tr>
                <tr><td>ESTATUS: </td><td><INPUT type="text" id="Estatus" name="Estatus" value="<?php echo $data["tiket"]["Estatus"]; ?>"></INPUT></td></tr>
            </tbody>
        </table>
        <p></p>
        <button id="guardar" name="guardar" type="submit">Guardar</button>
        </form>
    </body>
</html>
