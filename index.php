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