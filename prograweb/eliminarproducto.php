<?php

    //recibir id_prodcuto 

    $IDProducto = $_GET['id'];
    
    //echo $IDProducto;

    include('lib/conexion.php');

    $con = Conectar();

    $elsql = "DELETE FROM productos WHERE id_prod=$IDProducto;";

    //$elsql = "UPDATE productos SET estatus=0 WHERE id_prod=$IDProducto;";

    //echo $elsql;

    $con->query($elsql);

    echo "Resgistro eliminado";

    $con->close();
?>
</br>
    <a href='listaprod.php'>lista productos</a>
</body>