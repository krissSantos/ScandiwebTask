<?php
include 'database.php';

if(isset($_POST['delete_items'])){
 
    foreach($_POST['delete_id'] as $deleteid){
    $sql ="DELETE FROM products WHERE product_id =" .$deleteid;
    $result= mysqli_query($conn, $sql);
    }
    if($result){
        header("location: index.php");
    }
}

?>