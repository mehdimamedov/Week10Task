<?php 
	if(isset($_POST['submit'])){
		include 'db.php';
		$login = $_POST['login'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$sql = "INSERT INTO users(login,email,password) VALUES('$login', '$email', '$pass')";
		$query = mysqli_query($conn, $sql);
		if($query){
			header("Location: index.php?m=Succesfull");
		}
	}

 ?>