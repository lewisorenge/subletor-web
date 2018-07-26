function initMap() {

  var input = document.getElementById('street_address');

  var autocomplete = new google.maps.places.Autocomplete(input);





  autocomplete.addListener('place_changed', function() {
    var place = autocomplete.getPlace();
    if (!place.geometry) {
      return;
    }
    console.log(place.geometry.location.lat());
    console.log(place.geometry.location.lng());

  });
}