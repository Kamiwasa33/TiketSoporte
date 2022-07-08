<!DOCTYPE html>
<HTML>
    <head>
        <title>TIKETS</title>
    </head>
    <body>
        <h2>MVC CONTROL DE TIKETS DE SOPORTE TI</h2>
        <a href="index.php?c=tikets&a=nuevo">AGREGAR</a>
        <p>
        <table border="1" whdth="80%">
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
                echo "<td><a href='index.php?c=tikets&a=modificar&id=".$dato["id"]."'>Modificar</a></td>";
                echo "<td><a href='index.php?c=tikets&a=eliminar&id=".$dato["id"]."'>Eliminar</a></td>";
                echo "</tr>";
            }

            ?>
        </tbody>
        
        </table>

    </body>
</html>
