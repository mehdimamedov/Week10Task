<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>Hello, if you already have an account please <a href="login.php">login</a></h1>
	<form action="reg.php" method="POST">
		<input type="text" placeholder="Login" name="login"><br>
		<input type="email" placeholder="Email" name="email"><br>
		<input type="password" placeholder="Password" name="password">
		<input type="submit" name="submit">
	</form>
	<?php 
		if(isset($_GET['m'])){
			echo $_GET['m'];
		}
	 ?>
</body>
</html>