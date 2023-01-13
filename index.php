<?php
include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
  />
  <link rel="stylesheet" href="css/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<form action="delete.php" method="POST">
<header>
<div class="container mt-5">
    <div class="row">
      <div class="col-lg-9 text-dark">
          <h1>Product List</h1>
      </div>
      <div class="col-lg-1 text-dark">
      <a href="add_product.php"> <button class="btn btn-primary" type="button">ADD</button></a>
      </div>
      <div class="col-lg-2 text-dark">
      <button type="submit" class="btn btn-danger" name="delete_items">MASS DELETE</button>
      </div>
    </div>
</div>
</header>
<hr>
<div class='row'>
<?php
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);


$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    $id = $row["product_id"];
    $sku = $row["sku"];
    $name = $row["name"];
    $price = $row["price"];
    if($row["size"] != NULL){
      $attribute = $row["size"] . "MB";
    }else if($row["weight"] != NULL){
      $attribute = $row["weight"] . "KG";
    }else{
      $attribute = "Dimension" ."(". $row["height"] . "x" . $row["length"] . "x" . $row["width"] . ")";
    }
    
    echo 
    "<div class='col-3 mb-1'>
      <div class='card shadow my-1' style='height: 300px;'>
        <div>
          <input style='float:left' type='checkbox' class='delete-checkbox' name='delete_id[]' value ='$id'>
        </div>
        <div class='card-body'>
          <div style='position: relative;'>
            <h3 class='card-title text-light bg-dark bg-opacity-50 px-1 bg-gradient' style='height: 65px; width:100%;' >$sku</h3>
          </div>
          <h4 class='card-text'>$name</h4>
        <div class='text-bottom'>
          <p>
            $price.00$
          </p>
        </div>
          <p>
            $attribute
          </p>
        </div>
      </div>
    </div>
";
  }
}

?>
</div>
</form>
</body>
</html>