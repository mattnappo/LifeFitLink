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
        DEPRECIATED NAV BAR
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
  echo '<script>alert(' . $_SESSION["authentication_error"] . ');</script>';
  echo '<script>alert(' . $_SESSION["authentication"] . ');</script>';
  if($_SESSION['authentication'] == false) {
    echo '<script>alert("its false lol");</script>';
    $_SESSION['authentication_error'] = true;
    //header("location: index.php");
  }
?>
