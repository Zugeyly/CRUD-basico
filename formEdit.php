<?php include("conexion.php")?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/js/all.min.js" integrity="sha512-Cvxz1E4gCrYKQfz6Ne+VoDiiLrbFBvc6BPh4iyKo2/ICdIodfgc5Q9cBjRivfQNUXBCEnQWcEInSXsvlNHY/ZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styleInsert.css">
        <title>Insertar Producto</title>
    </head>
    <body>
        <div class="inserccion">
            <form id="insert" name="insert" action="updateproduct.php" method="post">
                <h3>ACTUALIZAR UN PRODUCTO</h3>
                <h5>Ingresa la informacion necesaria para actualizar el producto.</h5>
                <?php
                    if($_GET){
                        $query="SELECT * FROM products WHERE id =".$_GET['id'].";";
                        $result=mysqli_query($mysqli,$query);
                        if($row=mysqli_fetch_array($result))
                        {

                    
                ?>
                <label for="ID">
                    <span>No</span>
                    <input type="text" name="id" value="<?php echo $row['id'];?>" readonly="readonly">
                </label>
                <label for="Nombre">
                    <span>Nombre del producto*</span>
                    <input type="text" name="name" placeholder="Nombre del producto"  value="<?php echo $row['nombreProducto'];?>" required>
                </label>
                <br>
                <label for="Precio">
                    <span>Precio*</span>
                    <input type="number" step="any" min="0" name="precio" placeholder="Precio del producto"  value="<?php echo $row['precio'];?>" required>
                </label>
                <br>
                <label for="Unidades">
                    <span>Unidades*</span>
                    <input type="text" name="unidades" id="unit" placeholder="Cantidad en inventario"  value="<?php echo $row['unidades'];?>" required>
                </label>
                <br>
                <label for="">
                    <span>Descripcion*</span>
                    <textarea name="descripcion" id="desc" cols="30" rows="10"><?php echo $row['descripcion'];?></textarea>
                </label>
                <br>

                <?php
                        }
                    }
                ?>
                <input type="submit" name="Actualizar">

            </form>
        </div>
    </body>
</html>