<html lang="en">

  <head>
    <title>LifeFitLink</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <div class="w3-top">
      <div class="w3-row w3-white w3-padding">
        <div class="w3-wide w3-hide-medium w3-center w3-hide-small">
          <div>GYMS NEAR YOU</div>
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

    <div id="gymMap">
      <div id="map"></div>
      <script src="map.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCi7a-sMwb88DIQYw2Q1yIDzu1NGorYKAo&callback=initMap&libraries=places" async defer></script>
    </div>

  </body>
</html>


<?php
  session_start();
  if($_SESSION['allowedToGoToMaps'] == false) {
    header("location: index.php?showErr=true");
  }
?>
