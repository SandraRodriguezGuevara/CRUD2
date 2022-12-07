<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Productos</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>
<header >
<h1> Lista de productos </h1>
</header>
<main class="cont">
        <div class="">
            
            <div class="">
                
            </div>
            <div class="">
                <div class="">
                    <table class="tabla">  

                    <thead>
    
        <th>Producto</th>
        <th>Descripcion</th>
        <th>Precio</th>
        <th>Editar</th>
        <th>Eliminar</th>
</thead>
<?php

    include('lib/conexion.php');

    $con = Conectar();
    $elsql = "SELECT id_prod, nom_prod, desc_prod, pre_prod FROM productos ;";
    $resultado = $con->query($elsql);
    $registros = $resultado->num_rows;
    for($x=0;$x<$registros;$x++)
    {
        $dato = $resultado->fetch_object();
        echo "<tr>";
        echo "<td>".$dato->nom_prod."</td>";
        echo "<td>".$dato->desc_prod."</td>";
        echo "<td>".$dato->pre_prod."</td>";
        echo "<td> <a href='editarproducto.php?id=$dato->id_prod'><img src= EDITAR.png ></a></td>";
        echo "<td> <a href='eliminarproducto.php?id=$dato->id_prod'><img src= eliminar.png ></a></td>";
        echo "</tr>";

    }

        $con->close();
?>
</table>
</br>
    <a href='FormProductos.html'>Agregar productos</a>
</body>
</html>