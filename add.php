<?php
    include 'database.php';
  $sku = $_POST['sku'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $size = $_POST['size'];
  $weight =$_POST['weight'];
  $height = $_POST['height'];
  $width = $_POST['width'];
  $length = $_POST['length'];

  $sql ="INSERT INTO products (sku, name, price, size, weight, height, width, length) VALUES ('$sku','$name','$price','$size','$weight', '$height','$width','$length')";

  $result= mysqli_query($conn, $sql);
  header("location:index.php");
?>