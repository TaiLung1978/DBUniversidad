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
            echo ('preparando eliminar');
            $Sql="delete from talumno where CedulaAlumno='".$_GET["CedulaAlumno"]."'";
            //echo $Sql;
            $mysqli->query($Sql);
            echo ('eliminado');

            //If($Resultado=mysql_query($Sql,$Link)){
                //Header("location:AlumnoListar.php");     
            //}else{
                //Echo("Error al eliminar el registro");
            //}
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