<?php
include 'validation.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
  />
  <link rel="stylesheet" href="css/add_product.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script>


function prodType(prod){
  var discAttributes = document.getElementById("disc_attributes");
  var bookAttributes = document.getElementById("book_attributes");
  var furnitureAttributes = document.getElementById("furniture_attributes");
  
  discAttributes.style.display="none";
  bookAttributes.style.display="none";
  furnitureAttributes.style.display="none";
  
  if(prod=="Disc"){
    discAttributes.style.display="block";
  }else if(prod=="Book"){
    bookAttributes.style.display="block";
  }else if(prod=="furniture"){
  furnitureAttributes.style.display="block";
  }
}

  </script>
    <title>Add Product</title>
</head>
<body>
  <form id="product_form" action="add.php" method="POST">
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-9 text-dark">
          <h1>Product Add</h1>
      </div>
      <div class="col-lg-1 text-dark">
        <button type="submit" class="btn btn-primary" name="submit">Save</button>
      </div>
      <div class="col-lg-2 text-dark">
      <a href="index.php" type="button" class="btn btn-danger">Cancel</a>
      </div>
    </div>
    </div>
  <hr>
  <div class="form">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="SKU">SKU: </label>
          <input type="text" class="form-control" id="sku" name="sku" required>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Name">Name: </label>
          <input type="text" class="form-control" id="name" name="name" required>
          <span class="error">* <?php echo $nameErr;?></span>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
          <label for="Price">Price ($): </label>
          <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <label>Type Switcher</label>
        <select id="productType" name="product" onChange="prodType(this.value);">
            <option value="" disabled selected>Product Type</option>
            <option value="Disc"> DVD</option>
            <option value="Book">Book</option>
            <option value="furniture">Furniture</option>
        </select>
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
            <div class="fieldbox" id="disc_attributes" style="display:none">
              <div class='card shadow my-1' style='height: 100px;'>
                <div class='card-body'>
                <label class="mb-2">Size (MB):</label>
                <input type="number" name="size" id="size" >
                <span class="error">* <?php echo $sizeErr; ?> </span>  
                <p>Please provide the size of the Disc in Megabytes.</p>
                </div>
              </div>
            </div>
           </div>
         </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-5">
            <div class="fieldbox" id="book_attributes" style="display:none">
              <div class='card shadow my-1' style='height: 100px;'>
                <div class='card-body'>
                <label class="mb-2">Weight (KG):</label>
                <input type="number" name="weight" id="weight">
                <span class="error">* <?php echo $weightErr; ?> </span>  
                <p>Please provide the weight of the Book in kilograms.</p>
                </div>
              </div>
            </div>
           </div>
         </div>
        </div>
        
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
            <div class="fieldbox" id="furniture_attributes" style="display:none">
              <div class='card shadow my-1' style='height: 250px;'>
                <div class='card-body'>
                <label class="mb-4">Height (CM):</label>
                <input type="number" name="height" id="height"><br>
                <span class="error">* <?php echo $heightErr; ?> </span>  
                <label class="mb-4">Width (CM):</label>
                <input type="number" name="width" id="width"><br>
                <span class="error">* <?php echo $widthErr; ?> </span>  
                <label class="mb-4">Length (CM):</label>
                <input type="number" name="length" id="length">
                <span class="error">* <?php echo $lengthErr; ?> </span>  
                <p>Please provide the dimension of the furniture in Height x Width x Length.</p>
                </div>
              </div>
            </div>
           </div>
         </div>
        </div>
    </div>
  </form>
</body>
</html>