<!DOCTYPE html>
<HTML lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NUEVOTIKET</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    </head>
    <body>
        <h2><?php echo $data["titulo"]; ?></h2>
        <a class="btn btn-outline-primary" role="button" href="index.php"> <i class="bi bi-house-door"></i> PRINCIPAL</a>
        <p></p>
        <form id="nuevo" name="nuevo" method="POST" action="index.php?c=tikets&a=guardar" autocomplete="off">
        <table whdth="80%">
            <tbody>
                <tr><td>TITULO: </td><td><INPUT class="form-control" type="text" id="Titulo" name="Titulo"></INPUT></td></tr>
                <tr><td>NOMBRE: </td><td><INPUT class="form-control" type="text" id="Nombre" name="Nombre"></INPUT></td></tr>
                <tr><td>MENSAJE: </td><td height: 100px><INPUT class="form-control" type="text" id="Mensaje" name="Mensaje"></INPUT></td></tr>
                <tr><td>TELEFONO: </td><td><INPUT class="form-control gl-numero" type="text" id="Telefono" name="Telefono"></INPUT></td></tr>
                <tr><td>MAIL: </td><td><INPUT class="form-control" type="text" id="Mail" name="Mail"></INPUT></td></tr>
            </tbody>
        </table>
        <p></p>
        <button class="btn btn-success" id="guardar" name="guardar" type="submit">Guardar</button>
        </form>
    </body>
</html>
