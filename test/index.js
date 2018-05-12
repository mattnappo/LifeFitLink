var map;
function initMap() {

  let location = { };
  var geocoder =  new google.maps.Geocoder();
  var city = "dobbs ferry, ny";

  geocoder.geocode( { 'address': city + ', us'}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      var cityLat = results[0].geometry.location.lat();
      var cityLng = results[0].geometry.location.lng();
      location = { lat: cityLat, lng: cityLng };
    } else {
      alert("Error: " + status);
    }
    map = new google.maps.Map(document.getElementById('map'), {
      center: location,
      zoom: 14
    });

    var request = {
      location: location,
      radius: '4828.03',
      type: ['workout gyms']
    };

    service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, callback);

  });

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
