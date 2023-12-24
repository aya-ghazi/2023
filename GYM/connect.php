<?php

$conn = new mysqli('localhost', 'root', '', 'gym');
if(isset($_POST['name']) && isset($_POST['email']) &&isset($_POST['product'])
 &&isset( $_POST['message']) 
   ){



$name= $_POST['name'];
$email = $_POST['email'];
$product= $_POST['product'];
$message = $_POST['message'];


mysqli_query($conn,"insert into products (name,email,product,message)
                     value('$name','$email','$product','$message')");
echo "your data online successefully";
}

?>