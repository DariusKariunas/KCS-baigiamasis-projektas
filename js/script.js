var map;

function initMap() {
    var map;
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 54.898178, lng: 23.902594},
        zoom: 12,
        scrollwheel: true,

    });
    var marker = new google.maps.Marker({
        position: {lat: 54.898178, lng: 23.902594},
        map: map,
        title: 'Hello World!'
    });
}