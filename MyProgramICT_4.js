  var directionDisplay;
    var map;


function initialize() {
    directionsDisplay = new google.maps.DirectionsRenderer();
    var copenhagen = new google.maps.LatLng(37.0902, 95.7129);
    var myOptions = {
        zoom:12,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: copenhagen
    }

    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    directionsDisplay.setMap(map);
    }


    var directionsService = new google.maps.DirectionsService();

    function calcRoute() {
    var start = document.getElementById("start").value;
    var end = document.getElementById("end").value;
    var distanceInput = document.getElementById("distance");

    var request = {
        origin:start,
        destination:end,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
    };

    directionsService.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
            distanceInput.value = (response.routes[0].legs[0].distance.value / 1000)/1.609344;
        }
    });
    }