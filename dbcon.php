<?php

$servername = "localhost";
$name = "root";
$password = "";
$database = "sms";
$con = mysqli_connect($servername,$name,$password,$database);

if($con){

	
}
else{

	 echo "connection is not ok".mysqli_connect_error();
}

?>