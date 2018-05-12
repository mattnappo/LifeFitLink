<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="map.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
      #map {
        height: 100%;
        width: 100%;
      }
    </style>

    <title>Link</title>
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>

  <body>
    <h1 class="Banner">
      LifeFitLink
    </h1>
    <center><h4>Gyms near: Ardsley High School, New York</h4></center>



    <div id="gymMap">
      <div id="map"></div>
      <script src="map.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCi7a-sMwb88DIQYw2Q1yIDzu1NGorYKAo&callback=initMap&libraries=places" async defer></script>
    </div>

  </body>
</html>
