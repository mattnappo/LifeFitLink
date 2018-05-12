<html lang="en">

	<head>
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="login.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>

	<body>
		<a href="index.html"><h1> LifeFitLink </h1></a>
		<h2>In the space below, please create your username and password.</h2>

		<center>
			<form class="w3-form" method="post" action="register.php">
				<input type="text" placeholder="Username" name="username" /><br><br>
				<input type="text" placeholder="Password"	name="password" /><br><br>
				<input type="text" placeholder="Confirm Password" name="confirmpw" /><br><br>
				<button name="register" type="submit" class="w3-button w3-blue">Register</button>
			</form>
		</center>

	</body>

</html>

<?php
	$servername = "localhost";
	$serverUser = "root";
	$dbName = "main";
	$serverPass = "";

	if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpw = $_POST['confirmpw'];
    if(!empty($username) && !empty($password) && $password == $confirmpw) {
      $hashed_password = md5($password);


			$conn = new mysqli($servername, $serverUser, $serverPass, $dbName);
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}
			$sql = "INSERT INTO fit2 (username, password) VALUES ('$username', '$hashed_password');";
			if ($conn->query($sql) === TRUE) {
			    echo '<script>alert("Account created!");</script>';
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
      $conn->close();
    } else {
      if(empty($username)) {
        echo '<script>alert("Username empty!");</script>';
      }
      if(empty($password)) {
        echo '<script>alert("Password empty!");</script>';
      }
      if($password != $confirmpw) {
        echo '<script>alert("Passwords do not match!");</script>';
      }
    }
  }
?>
