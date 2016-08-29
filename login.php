<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Please login</h1>
	<form action="check.php" method="POST">
		<input type="login" placeholder="Login" name="login"><br>
		<input type="password" placeholder="Password" name="pass">
		<input type="submit" name="submit">
	</form>
		<?php 
		if(isset($_GET['m'])){
			echo $_GET['m'];
		}
	 ?>
</body>
</html>