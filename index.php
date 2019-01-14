<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <script src="js/script.js"></script>
    <title>Snuber</title>
<style>
    #map {
    height: 100%;
    }

    html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    }

</style>
</head>

<body>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php

require __DIR__ . '\vendor\autoload.php';
    $head = new \KCSG\HeaderFooter();
    $head->header();

    $map = new \KCSG\Map();
    $map->googleMap();

    $foot = new \KCSG\HeaderFooter();
    $foot->footer();

?>

</body>
</html>

