<html>
    <head>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,500">
        <link rel="stylesheet" href="css/style.css">
        <title>DBUniversidad PHP</title>
    </head>
    <body>
        <?php
            //require ('Conex.php');
            $mysqli = new mysqli('localhost', 'root', 'mysql', 'dbuniversidad');
            if (mysqli_connect_errno()){
                    echo ('no pudo conectarse: ' . mysqli_connect_error());
            }
            else{
                    echo ('conectado satisfactoriamente');
            }

            $var_consulta= 'SELECT * FROM talumno';	
            $var_resultado = mysqli_query($mysqli,$var_consulta);
            if(!$var_resultado->num_rows>0){
            // if(!$var_resultado){
                    echo('No hay registros');
            }
            else{
                    echo($var_resultado->num_rows);
            }
        ?>	
            <table>
                <tr>
                    <td>Modificar</td>
                    <td>Eliminar</td>
                    <td>Cédula</td>
                    <td>Nombre</td>
                    <td>Sexo</td>
                </tr>
                <?php
                    while($Row=mysqli_fetch_assoc($var_resultado)){
                ?>
                    <tr>
                    <td><a href="ModificarAlumno.php?CedulaAlumno=<?php echo($Row["CedulaAlumno"]); ?>">Modificar</a></td>
                    <td><a href="EliminarAlumno.php?CedulaAlumno=<?php echo($Row["CedulaAlumno"]); ?>">Eliminar</a></td>
                    <td><?php echo($Row["CedulaAlumno"]); ?></td>
                    <td><?php echo($Row["PrimerNombreAlumno"]); ?></td>
                    <td><?php echo($Row["SexoAlumno"]); ?></td>	
                    </tr>
                <?php }?>
            </table>
        <div><a href="AgregarAlumno.php">Agregar un alumno nuevo</a></div>
    </body>
</html>
<?php mysqli_close($mysqli);?> 