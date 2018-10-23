<?php
error_reporting(0);
require "init.php";
 
// $name = $_POST["name"];
// $password = $_POST["password"];
// $email = $_POST["email"];
// $category = $_POST["category"];
// $identity = $_POST["identity"];
// $phone_number = $_POST["phone_number"];
// $token =$_POST["token"];

 
$sql = "INSERT INTO `users` (`id`, `category`, `identity`, `token`,`name`, `email`, `encrypted_password`, `phone_number`) VALUES (NULL, 'X', '111','GHJ', 'SANA','S@H.COM', '2655f', 1213);";
if(!mysqli_query($con, $sql)){
    echo '{"message":"Unable to save the data to the database."}'.$con->error;
}
 
?>