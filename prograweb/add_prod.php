<?php
//Recibir datos del formulario
$nomprod = $_POST['txtNProducto'];
$descprod = $_POST['txtDProducto'];
$preprod = $_POST['txtPProducto'];

//imprimir valores de variables 

//echo $nomprod, $descprod, $preprod;

//Archivo de conexion 

include('lib/conexion.php');

$con = Conectar();

$elsql = "INSERT INTO productos (nom_prod, desc_prod, pre_prod) VALUES('$nomprod','$descprod',$preprod);";

//echo $elsql;

//Ejecutar

$con->query($elsql);

echo "Registro guardado";
?>
<body>
</br>
    <a href='listaprod.php'>lista productos</a>
</body>