<!DOCTYPE html>
<HTML>
    <head>
        <title>TIKETS</title>
    </head>
    <body>
        <h2><?php echo $data["titulo"]; ?></h2>
        <a href="Index.php">PRINCIPAL</a>
        <p></p>
        <form id="nuevo" name="nuevo" method="POST" action="index.php?c=tikets&a=guardar" autocomplete="off">
        <table whdth="80%">
            <tbody>
                <tr><td>TITULO: </td><td><INPUT type="text" id="Titulo" name="Titulo"></INPUT></td></tr>
                <tr><td>NOMBRE: </td><td><INPUT type="text" id="Nombre" name="Nombre"></INPUT></td></tr>
                <tr><td>MENSAJE: </td><td height: 100px><INPUT type="text" id="Mensaje" name="Mensaje"></INPUT></td></tr>
                <tr><td>TELEFONO: </td><td><INPUT type="text" id="Telefono" name="Telefono"></INPUT></td></tr>
                <tr><td>MAIL: </td><td><INPUT type="text" id="Mail" name="Mail"></INPUT></td></tr>
            </tbody>
        </table>
        <p></p>
        <button id="guardar" name="guardar" type="submit">Guardar</button>
        </form>
    </body>
</html>
