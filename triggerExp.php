<?php

$db_name = "android_api";
$mysql_user = "root";
$mysql_pass = "";
$server_name = "localhost";
 
$con = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);
 
if(!$con){
    echo '{"message":"Unable to connect to the database."}';
}

$sql="DELIMITER $$ CREATE TRIGGER `notif` AFTER INSERT ON `USER_INFO` FOR EACH ROW BEGIN INSERT INTO `user_info` (`name`, `email`,`password`) VALUES (NEW.`name`,NEW.`email`, NEW.`password`) END$$ DELIMITER ";		  
				  
	if(!mysqli_query($con, $sql)){
			printf("Error: %s\n", mysqli_error($con));
            echo "Unable to select the data from the database <br>\n";
			}
			else{
			 $resultRef=mysqli_query($con,$sql);
		     while($row = mysqli_fetch_array($resultRef)){
		     $refUser="new name = ".$row[0]." new email = ".$row[1]." new password = ".$row[2];
		     }
             // echo "Your ref is ".$refUser."<br>\n";
			 }
			 echo json_encode(array("ref"=>$refUser));			  

?>