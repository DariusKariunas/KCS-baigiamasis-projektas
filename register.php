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
</head>
<body>
<?php

require __DIR__ . '\vendor\autoload.php';
    $head = new \KCSG\HeaderFooter();
    $head->header();

    $reg = new KCSG\Register();
    $reg->register();

    $foot = new \KCSG\HeaderFooter();
    $foot->footer();
?>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

