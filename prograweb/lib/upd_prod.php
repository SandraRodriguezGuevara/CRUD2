<?php
    //recibir datos del formulario editarproduuto
    $IDprod = $_POST['txtIdprod'];
    $NProd =$_POST['txtNProd'];
    $DProd =$_POST['txtDProd'];
    $PProd =$_POST['txtPProd'];
    
    //echo $IDprod, $NProd, $DProd, $PProd;

    include('conexion.php');

    $con = Conectar();

    //cadena sql

    $elsql = "UPDATE productos SET nom_prod='$NProd',desc_prod='$DProd', pre_prod=$PProd WHERE id_prod=$IDprod;";

    //echo $elsql;
    $con->query($elsql);

    echo "Registro Actualizado";
    
?>


