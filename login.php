<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

	<a href="index.html"><h1> LifeFitLink </h1></a>
	<h2> In the space below, please enter your username and password.</h2>

	<center>
		<form method="post" action="login.php">
			<input type="text" placeholder="Username" name="username" /><br><br>
			<input type="password" placeholder="Password" name="password" /><br><br>
			<button type="submit" name="login" class="button">Login</button>
		</form>
	</center>


</body>
<?php
	//server stuff
	$servername = "localhost";
	$serverUser = "root";
	$dbName = "main";
	$serverPass = "";
	//form stuff
	$username = "";
	$password = "";
	$secPass = "";
	$secured = false;
		session_start();
		if(isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			//Connect to database and test connection
			$secPass = md5($password);
			$conn = new mysqli($servername, $serverUser, $serverPass, $dbName);
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			//make sql stuff
			$sql = "SELECT id, username, password FROM fit2";
			$result = $conn->query($sql);
			    // output data of each row
			    while($row = $result->fetch_assoc()) {
			        if($row['username'] == $username && $row['password'] == $secPass) {
			        	$secured = true;
			        }
			    }
			    if($secured==true) {
						$_SESSION['username'] = "true";
			    } else {
						echo '<script>alert("Incorrect login.")</script>';
					}

		}

?>
