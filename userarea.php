<?php 
session_start();
	if(isset($_SESSION['login'])){
 ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Welcome to userpanel</h1>
	<a href="logout.php">Log Out</a>
</body>
</html>
<?php }else{
	header("Location: login.php?m=Pleaselogin");
	} ?>