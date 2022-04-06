<?php
require('conexion.php');
$id=$_GET['id'];

$sql="DELETE FROM products WHERE id=$id";

if(mysqli_query($mysqli,$sql)){
    echo '<script languaje="javascript">
    alert("Producto eliminado exitosamente");window.location.href="principal.php"
    </script>';
}else{
    echo "Error: ".$sql."<br>".mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>