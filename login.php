<?php
error_reporting(0);
require "init.php";
 
$identity = $_POST["identity"];
$password = $_POST["password"];
 
 
$sql = "SELECT * FROM `users` WHERE `identity`='$identity' AND `encrypted_password`='$password';";
 
$result = mysqli_query($con, $sql);
 
$response = array();
 
while($row = mysqli_fetch_array($result)){
    $response = array("id"=>$row[0],"category"=>$row[1],"identity"=>$row[2],"token"=>$row[3],"name"=>$row[4],"email"=>$row[5],"password"=>$row[6],"phone_number"=>$row[7]);
}
 
echo json_encode(array("user_data"=>$response));
 
?>