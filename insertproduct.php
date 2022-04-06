<?php
require('conexion.php');
$nombre=$_POST['name'];
$precio=$_POST['precio'];
$unidades=$_POST['unidades'];
$descripcion=$_POST['descripcion'];

$sql="INSERT INTO products(id,nombreProducto,precio,unidades,descripcion) VALUES
(NULL,'$nombre',$precio,$unidades,'$descripcion')";

if(mysqli_query($mysqli,$sql)){
    echo '<script languaje="javascript">
    alert("Producto agregado exitosamente");window.location.href="principal.php"
    </script>';
}else{
    echo "Error: ".$sql."<br>".mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>

