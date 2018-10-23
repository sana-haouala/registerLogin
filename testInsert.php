<?php
error_reporting(0);
require "init.php";

$token= 'cYNY7yrPewg:APA91bFUBLS9Q0RrjgJfGpdIXpoWD9Fu7JRtAAZa6nwwniplxD1ma9Ig4iI9R_9b9OQ7ksYTR7gjw4MaoKUSfIaFMXLBsV3mEgBq0ikCayu2PGPSJm1vOQMswLSP3MCiMUdIP-mF0zD_';
$client_id=$_GET["client_id"];
$ref_demande=$_GET["ref_demande"];
$etat=$_GET["etat"]; 

 
$sql = "INSERT INTO `pushnotif`(`id`,`token`, `client_id`, `ref_demande`, `etat`, `dateEtat`) VALUES (null,'$token',$client_id,'$ref_demande','$etat',NOW())";
if(!mysqli_query($con, $sql)){
    echo '{"message":"Unable to save the data to the database."}';
}
else{
		echo 'done avec '.$client_id;
	
}
 
?>