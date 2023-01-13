<?php  

$nameErr = $sizeErr = $weightErr = $heightErr = $widthErr = $lengthErr = "";  
$name = $size = $weight = $height = $width = $length = "";  
  
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      

    if (($_POST["name"]) != NULL) {   
        $name = input_data($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
            $nameErr = "Only alphabets and white space are allowed";  
            }  
    }  
      

    if (($_POST["size"]) != NULL) {
             $size = input_data($_POST["size"]);  
            if (!preg_match ("/^[0-9]*$/", $size) ) {  
            $sizeErr = "Please, provide the data of indicated type";  
            }  
    } 
    if (($_POST["weight"]) != NULL) {
        $weight = input_data($_POST["weight"]);  
       if (!preg_match ("/^[0-9]*$/", $weight) ) {  
       $weightErr = "Please, provide the data of indicated type";  
       }  
    }  
    if (($_POST["height"]) != NULL) {
        $height = input_data($_POST["height"]);  
    if (!preg_match ("/^[0-9]*$/", $height) ) {  
    $heightErr = "Please, provide the data of indicated type";  
    }  
    }
    if (($_POST["width"]) != NULL) {
        $width = input_data($_POST["width"]);  
    if (!preg_match ("/^[0-9]*$/", $width) ) {  
    $widthErr = "Please, provide the data of indicated type";  
    }  
    } 
    if (($_POST["length"]) != NULL) {
        $length = input_data($_POST["length"]);  
    if (!preg_match ("/^[0-9]*$/", $length) ) {  
    $lengthErr = "Please, provide the data of indicated type";  
    }  
    } 
    
   
}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?>  