<?php
function Conectar()
{
    $server = "localhost";
    $username = "root";
    $password = "Sandra2020";
    $database = "proweb";

    $conexion = mysqli_connect($server, $username, $password, $database);

    if(!$conexion)
    {
        echo "no se pudo establecer la conexion".mysql_connect_error();
    }
    else
    {
        //echo "se establecio la conexion";
    }

    return $conexion;
}
?>