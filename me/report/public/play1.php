<?php
include('../config/config.php');

$radius = 7.0;
$pi = 3.14159;

// Extract the year only
$currentYear = date('Y');
echo $currentYear . "<br>";


$circumference = 2 * $radius * $pi;
$area = $pi * $radius * $radius;

$formattedRadius = number_format($radius, 1);
$formattedCircumference = number_format($circumference, 2);
$formattedArea = number_format($area, 2);


?>

<h2>Hello world</h2>

</p>
    Cirkelns radie är <?= $radius ?> enheter, dess omkrets är <?= $circumference ?> enheter och dess area är <?= $formattedArea ?> enheter i kvadrat.
</p>