<?php session_start(); ?>
<html lang="en">

  <head>
    <title>LifeFitLink</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
  </head>

  <body class="body">

    <div id="loginWindow" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
        <div class="w3-center"><br>
          <span onclick="document.getElementById('loginWindow').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
          <h2>LOGIN</h2>
        </div>
        <form class="w3-container" method="post" action="index.php">
          <div class="w3-section">
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Username" name="username" required>
            <input class="w3-input w3-border" type="password" placeholder="Password" name="password" required>
            <button class="w3-button w3-block w3-cyan w3-section w3-padding" name="login" type="submit">Login</button>
            <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
          </div>
        </form>
        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
          <button onclick="document.getElementById('loginWindow').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        </div>
      </div>
    </div>

    <div id="registerWindow" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
        <div class="w3-center"><br>
          <span onclick="document.getElementById('registerWindow').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
          <h2>REGISTER</h2>
        </div>
        <form class="w3-container" method="post" action="index.php">
          <div class="w3-section">
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Username" name="username" required>
            <input class="w3-input w3-border" type="password" placeholder="Password" name="password" required>
            <input class="w3-input w3-border w3-margin-top" type="password" placeholder="Confirm Password" name="confirmpw" required>
            <button class="w3-button w3-block w3-cyan w3-section w3-padding" name="register" type="submit">Register</button>
          </div>
        </form>
        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
          <button onclick="document.getElementById('registerWindow').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        </div>
      </div>
    </div>

    <div id="registerSuccess" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-opacity" style="max-width:600px">
        <div class="w3-center"><br>
          <span onclick="document.getElementById('registerSuccess').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
          <h2>REGISTER</h2>
          <p class="w3-margin-bottom">
            Account Created! You may now proceed to view the maps.
          </p>
          <br>
        </div>
      </div>
    </div>

    <div id="usernameTaken" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-opacity" style="max-width:600px">
        <div class="w3-center"><br>
          <span onclick="document.getElementById('usernameTaken').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
          <h2>OOPS!</h2>
          <p class="w3-margin-bottom">
            That username is already in use!
          </p>
          <br>
        </div>
      </div>
    </div>

    <div id="authentication_error" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-opacity" style="max-width:600px">
        <div class="w3-center"><br>
          <span onclick="document.getElementById('authentication_error').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
          <h2>OOPS!</h2>
          <p class="w3-margin-bottom">
            Login or register first to view the maps!
          </p>
          <br>
        </div>
      </div>
    </div>

    <div class="w3-top">
      <div class="w3-row w3-white w3-padding">
        <div class="w3-wide w3-hide-medium w3-center w3-hide-small">
          <div>LIFE FIT LINK</div>
        </div>
      </div>
      <div class="w3-bar w3-cyan w3-large" style="z-index:4;">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" href="index.php">HOME</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" href="gyms.php">GYMS</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" href="people.php">PEOPLE</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16 w3-right" onclick="document.getElementById('registerWindow').style.display='block'">REGISTER</a>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hover-white w3-padding-16 w3-right" onclick="document.getElementById('loginWindow').style.display='block'">LOGIN</a>
      </div>
    </div>

    <div class="w3-container middle" style="margin-top:117px;">
      <div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
        <h1>LIFE-FIT-LINK</h1>
        <p>
          What's the hardest part of working out? <u><b>Motivation</b></u>. As said by Zig Ziglar, an American author, "People often say that motivation doesn't last. Well, neither does bathing - that's why we recommend it daily." That is why the Masters Computer Science Team developed LifeFitLink. The app makes it simple to find the nearest gym within a 3 mile radius which allows the user to plan and set up times for meeting and working out. The built in "Find Friends" feature, the crux of the app, gives the client a profile database of people within their area, and allows the user to collaborate with different people while they exercise. Simply download, sign up, and search to find people to work out with at a gym near you.
        </p>
      </div>
    </div>

  </body>
</html>
<?php
  if(isset($_GET['showErr'])) {
    echo '<script>document.getElementById("authentication_error").style.display = "block";</script>';
    // $_SESSION['showErrMsg'] = false;
  }
?>
<?php
	$servername = "localhost";
	$serverUser = "root";
	$dbName = "main";
	$serverPass = "";
	if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpw = $_POST['confirmpw'];
    if($password == $confirmpw) {
      $hashed_password = md5($password);
			$conn = new mysqli($servername, $serverUser, $serverPass, $dbName);
			if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
			}
      $usernameExists = false;
      $sql = "SELECT id, username FROM lifeFitLink";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					if($row['username'] == $username) {
						$usernameExists = true;
						break;
					}
				}
				if($usernameExists == true) {
					echo '<script>document.getElementById("usernameTaken").style.display = "block";</script>';
				} else {
					$sql = "INSERT INTO lifeFitLink (username, password) VALUES ('$username', '$hashed_password');";
					if ($conn->query($sql) === TRUE) {
            $_SESSION["allowedToGoToMaps"] = true;
            if(isset($_SESSION['showErrMsg'])) {
              $_SESSION['showErrMsg'] = false;
            }
            echo '<script>document.getElementById("registerSuccess").style.display = "block";</script>';
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}
          $conn->close();
				}
			} else {
        echo '<script>alert("Empty database.");</script>';
      }
    } else {
      echo '<script>alert("Passwords do not match!");</script>';
    }
  }
?>
