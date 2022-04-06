<?php
require('conexion.php');
$id=$_POST['id'];
$nombre=$_POST['name'];
$precio=$_POST['precio'];
$unidades=$_POST['unidades'];
$descripcion=$_POST['descripcion'];

$sql="UPDATE products SET nombreProducto='$nombre',precio=$precio,unidades=$unidades,descripcion='$descripcion' WHERE id=$id";

if(mysqli_query($mysqli,$sql)){
    echo '<script languaje="javascript">
    alert("Producto actualizado exitosamente");window.location.href="principal.php"
    </script>';
}else{
    echo "Error: ".$sql."<br>".mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>