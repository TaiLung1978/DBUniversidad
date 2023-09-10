<?php
    try
    {
        //include("Conex.php");
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
                $Sql="update talumno set PrimerNombreAlumno='".$_POST['PrimerNombreAlumno']."', SexoAlumno='".$_POST['SexoAlumno']."' where CedulaAlumno='".$_POST['CedulaAlumno']."'";
                //echo $Sql;
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