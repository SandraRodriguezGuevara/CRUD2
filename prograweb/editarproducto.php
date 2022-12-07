<?php
//Recibbir id_producto de listaprod.php
$id_prod = $_GET['id'];

echo $id_prod;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Editar Producto</h1>

    <form action="lib/upd_prod.php" method="POST">
        <?php
        include('lib/conexion.php');
        $con = Conectar();

        $elsql ="SELECT id_prod, nom_prod, desc_prod, pre_prod FROM productos WHERE id_prod=$id_prod;";

        //echo $elsql;

        $resultado = $con->query($elsql);
        $registros = $resultado->num_rows;
        for($x=0;$x<$registros;$x++)
        {
            $dato = $resultado->fetch_object();
        
        
        ?>
</br>
    <label>ID: </label>
        <input type="text" readonly value="<?php echo $dato->id_prod;?>" name="txtIdprod">
</br>
        <label>Producto: </label>
        <input type="text" value="<?php echo $dato->nom_prod;?>" name="txtNProd">
</br>
        <label>Descripcion: </label>
        <input type="text" value="<?php echo $dato->desc_prod;?>" name= "txtDProd">
</br>
        <label>Precio: </label>
        <input type="text" value="<?php echo $dato->pre_prod;?>" name="txtPProd">
</br>
</br>
<?php
        }
    ?>
<button type="submit">Actualizar</button>

</form>
    </br>
    <a href='listaprod.php'>Lista de productos</a>
</body>
</html>

