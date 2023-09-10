<?php
    try
    {
        // Include("Conex.php");
        $mysqli = new mysqli('localhost', 'root', 'mysql', 'dbuniversidad');

        /* comprobar la conexión */
        if ($mysqli->connect_errno) 
        {
                printf("Falló la conexión: %s\n", $mysqli->connect_error);
                //exit();
        }
        else
        {
                echo ('preparando guardar');
                $Sql="insert into talumno(CedulaAlumno,PrimerNombreAlumno,SexoAlumno) values('".$_POST['CedulaAlumno']."', '".$_POST['PrimerNombreAlumno']."', '".$_POST['SexoAlumno']."')";
                $mysqli->query($Sql);
                echo ('guardardo');
                // If($Resultado=mysql_query($Sql,$mysqli)){
                        // mysql_query($Sql,$mysqli)
                        // Header("location:ListadoAlumno.php");
                        // echo ('guardardo');
                // }
                // else{
                        // Echo("Error al tratar de guardar");
                // }
        }
    }
    catch(Exception $e)
    {
            var_dump($e);
            print("Error de tipo ni idea aun");
    }
    finally
    {
            print("Finally");
            $mysqli->close();
    }
?> 
