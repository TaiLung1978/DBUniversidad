<html>
    <head>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,500">
        <link rel="stylesheet" href="css/style.css">
        <title>DBUniversidad PHP</title>
        <?php
            //include("Conex.php");
            $mysqli = new mysqli('localhost', 'root', 'mysql', 'dbuniversidad');
            if (mysqli_connect_errno()){
                echo ('no pudo conectarse: ' . mysqli_connect_error());
            }
            else{
                echo ('conectado satisfactoriamente');
            }

            $var_consulta="select * from talumno where CedulaAlumno='".$_GET['CedulaAlumno']."'";
            //echo($var_consulta);
            if(!$var_resultado=mysqli_query($mysqli,$var_consulta)){
                die("Error".mysql_error($Link));
            }

            $Row=mysqli_fetch_assoc($var_resultado);
        ?>

        <script type="text/javascript">
            function enfocar(){
                document.getElementById('PrimerNombreAlumno').focus();
            }
        </script>
    </head>
    
    <body onLoad="enfocar()">

        <form name="form1" method="post" enctype="multipart/form-data" action="GuardarModificado.php">
            <table>
                <tr>
                    <td>Cedula</td>
                    <td><input type="text" name="CedulaAlumno" value="<?php echo($Row["CedulaAlumno"]);?>" id="CedulaAlumno" readonly size="10" maxlength="8"  ></td>
            </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" tabindex="1" name="PrimerNombreAlumno" id="PrimerNombreAlumno"  value="<?php echo($Row["PrimerNombreAlumno"]);?>" ></td>
            </tr>
                <tr>
                    <td>Sexo</td>
                    <td><input type="text" tabindex="2" name="SexoAlumno" id="SexoAlumno"  value="<?php echo($Row["SexoAlumno"]);?>" ></td>
            </tr>
                <tr>
                    <td>

                    <!–el evento onClick sirve para validar el formulario a travès de una funcion JavaScript –>
                    <input type="submit" value="Guardar" onClick="">

                    </td>
            </tr>

            </table>
        </form>

    </body>
</html>
<?php mysqli_close($mysqli);?> 
