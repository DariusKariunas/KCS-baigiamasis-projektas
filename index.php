<?php

require __DIR__ . '\vendor\autoload.php';
session_start();

    $head = new \KCSG\HeaderFooter();
    $head->header();

    $map = new \KCSG\Map();
    $map->googleMap();

    $foot = new \KCSG\HeaderFooter();
    $foot->footer();

if(isset($_SESSION['post']) && $_SESSION['post'] == true){
    session_unset();
}

$mark1 = new KCSG\Database\DBfunctions();
$mark = $mark1->getMarkers();

foreach ($mark as $item) {
    echo "<script>new google.maps.Marker({
        position: new google.maps.LatLng". $item['city'] .",
        map: map});</script>";
}
