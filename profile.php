<?php

require __DIR__ . '\vendor\autoload.php';
session_start();

$head = new \KCSG\HeaderFooter();
$head->header();



$foot = new \KCSG\HeaderFooter();
$foot->footer();
