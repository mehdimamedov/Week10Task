<?php 
if(isset($_POST['submit'])){
	include "db.php";
	$login = $_POST['login'];
	$password = $_POST['pass'];
	$sql = "SELECT * FROM users WHERE login='$login' AND password='$password'";
	$query = mysqli_query($conn, $sql);
	if(mysqli_num_rows($query) != 0){
		session_start();
		$_SESSION['login'] = $login;
		header("Location: userarea.php");
	}else{
		header("Location: login.php?m=WrongLogin");
	}
} 
	?>