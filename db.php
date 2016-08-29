<?php 
	$host = "localhost";
	$db = "mysite";
	$user = "root";
	$pwd = "";

	$conn = mysqli_connect($host,$user,$pwd,$db);
	if($conn){
		
	}else{
		echo "connection problem";
	}
 ?>