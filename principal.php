<?php include("conexion.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Cosmetics store</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/js/all.min.js" integrity="sha512-Cvxz1E4gCrYKQfz6Ne+VoDiiLrbFBvc6BPh4iyKo2/ICdIodfgc5Q9cBjRivfQNUXBCEnQWcEInSXsvlNHY/ZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
  <h2>COSMETICS STORE</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="formInsert.html">Agregar producto <i class="fa-solid fa-circle-plus"></i></a></li>
      <li><a href="#">Informacion del producto <i class="fa-solid fa-magnifying-glass"></i></a></li>
      <li><a href="principal.php">Pagina principal <i class="fa-solid fa-arrow-left"></i></a></li>
    </ul>
  </nav>
  
  <article>
    <table>
      <th>No.</th>
      <th>Nombre producto</th>
      <th>Precio</th>
      <th>Unidades</th>
      <th>Descripción</th>
        <?php
        $query="SELECT * FROM products";
        $result= mysqli_query($mysqli,$query);
        while($row=mysqli_fetch_array($result)){
          echo'<tr>
          <td>'.$row["id"].'</td>
          <td>'.$row["nombreProducto"].'</td>
          <td>'.$row["precio"].'</td>
          <td>'.$row["unidades"].'</td>
          <td>'.$row["descripcion"].'</td>
          <td><a href="formEdit.php?id='.$row["id"].'"><i class="fa-solid fa-pen-to-square"></i></a></td>
          <td><a href="deleteproduct.php?id='.$row["id"].'"><i class="fa-solid fa-trash-can"></i></a></td>
          </tr>';
        }
        ?>
    </table>
  </article>
</section>

<footer>
  <p>Hecho con amor por zuzu <i class="fa-solid fa-heart"></i></p>
</footer>

</body>
</html>
