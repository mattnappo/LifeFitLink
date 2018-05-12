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
  });
}

var request = {
  location: location,
  radius: '4828.03', // Three mile radius
  type: ['workout gym']
};
