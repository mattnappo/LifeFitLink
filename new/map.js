var map;
let city;
var currentLocation;
function initMap() {
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {
      currentLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
      map = new google.maps.Map(document.getElementById('map'), {
        center: currentLocation,
        zoom: 14
      });
      var request = {
        location: currentLocation,
        radius: '4828.03',
        type: ['workout gyms']
      };
      service = new google.maps.places.PlacesService(map);
      service.nearbySearch(request, callback);
    });
  }
}
function createMarker(place) {
  new google.maps.Marker({
    position: place.geometry.location,
    map: map
  });
}
function callback(results, status) {
  if (status == google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
      var place = results[i];
      createMarker(results[i]);
    }
  }
}
