<?php

require __DIR__ . '\vendor\autoload.php';
session_start();

$head = new \KCSG\HeaderFooter();
$head->header();

if(isset($_SESSION['post']) && $_SESSION['post'] == true){
    echo "<div style='display: flex; color:red' class='justify-content-center'>You need to be logged in to manage Posts.</div>";
}

$foot = new \KCSG\HeaderFooter();
$foot->footer();
