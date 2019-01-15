<?php

require __DIR__ . '\vendor\autoload.php';
session_start();
    $head = new \KCSG\HeaderFooter();
    $head->header();

    $map = new \KCSG\Map();
    $map->googleMap();

    $foot = new \KCSG\HeaderFooter();
    $foot->footer();
