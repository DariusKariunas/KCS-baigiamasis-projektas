var map;

lastWindow=null;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 54.898178, lng: 23.902594},
        zoom: 12,
        scrollwheel: true,

    });

        map.addListener('click', function(e) {
        placeMarkerAndPanTo(e.latLng, map);
        var pos = e.latLng;
        document.getElementById("city").value = pos;
    });
}

function placeMarkerAndPanTo(latLng, map) {
    var marker;
    marker = new google.maps.Marker({
        position: latLng,
        map: map
    });

    var infowindow = new google.maps.InfoWindow({
        content:'Positions ' + latLng
    });

    google.maps.event.addListener(marker, 'click', function() {
        if (lastWindow) lastWindow.close();
        infowindow.open(map, marker);
        lastWindow=infowindow;
    });

    map.panTo(latLng);
}
