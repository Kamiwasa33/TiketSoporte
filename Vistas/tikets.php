<!DOCTYPE html>
<HTML lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TIKETS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    </head>
    <body>
        <h2>MVC CONTROL DE TIKETS DE SOPORTE TI</h2>
        <a class="btn btn-outline-primary" role="button" href="index.php?c=tikets&a=nuevo"><i class="bi bi-plus-circle"></i> AGREGAR</a>
        <p>
        <table class="table" border="1" whdth="80%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Nombre</th>
                    <th>Mensaje</th>
                    <th>Telefono</th>
                    <th>Mail</th>
                    <th>Estatus</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>         
            </thead>
            <tbody>
                <?php
                    foreach($data["tikets"] as $dato){
                        echo "<tr>";
                        echo "<td>".$dato["id"]."</td>";
                        echo "<td>".$dato["Titulo"]."</td>";
                        echo "<td>".$dato["Nombre"]."</td>";
                        echo "<td>".$dato["Mensaje"]."</td>";
                        echo "<td>".$dato["Telefono"]."</td>";
                        echo "<td>".$dato["Mail"]."</td>";
                        echo "<td>".$dato["Estatus"]."</td>";
                        echo "<td><a class='btn btn-outline-secondary' role='button' href='index.php?c=tikets&a=modificar&id=".$dato["id"]."'><i class='bi bi-pencil-square'></i> Modificar</a></td>";
                        echo "<td><a class='btn btn-outline-danger' role='button' href='index.php?c=tikets&a=eliminar&id=".$dato["id"]."'><i class='bi bi-trash'></i> Eliminar</a></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>
