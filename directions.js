function initMap(){
  directionsService = new google.maps.DirectionsService();
  directionsRenderer = new google.maps.DirectionsRenderer();

  var mapCenter = new google.maps.LatLng(51.056628, 26.772190);

  var mapOptions = {
    zoom: 1,
    center: mapCenter
  }
  var map = new google.maps.Map(document.getElementById('map'), mapOptions);
  directionsRenderer.setMap(map);
}

function calcRoute(){
  var request = {
    origin: 'Merced, CA',
    destination: 'Los Angeles, CA',
    travelMode: 'TRANSIT',
    unitSystem: google.maps.UnitSystem.METRIC,
    provideRouteAlternatives: false,
  };

  directionsService.route(request, function(result, status) {
    if (status == 'OK') {
      directionsRenderer.setDirections(result);
    }
  });
}
