<html>
    <head>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:400,500">
        <link rel="stylesheet" href="css/style.css">
        <title>DBUniversidad PHP</title>
    </head>
    <body>
        <form name="form1" method="post" action="GuardarAlumno.php">
                <table>
                        <tr>
                                <td>Cedula</td>
                                <td><input type="text" name="CedulaAlumno"></td>
                        </tr>
                        <tr>
                                <td>Nombre</td>
                                <td><input type="text" name="PrimerNombreAlumno"></td>
                        </tr>
                        <tr>
                                <td>Sexo</td>
                                <td><input type="text" name="SexoAlumno"></td>
                        </tr>
                        <tr>
                                <td><input type="submit" value="Guardar"></td>
                        </tr>
                </table>
        </form>
    </body>
</html>