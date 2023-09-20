<?php
include('../config/config.php');

$date = $_GET["date"] ?? date('Y-m-d');

$timestamp = strtotime($date);

$dateStr = date('Y-m-d', $timestamp);
$monthStr = date('F', $timestamp);
$monthDayStr = date('t', $timestamp);
$weekStr = date('W', $timestamp);
$dayStr = date('l', $timestamp);

?>

<h2>HTML formulär med GET</h2>

<form action="" method="get">
    <p>
        Datum:
        <input type="text" name="date" placeholder="Skriv in ett datum">
    </p>

    <p>
        <input type="submit" value="Skicka" name="doit">
        <input type="reset" value="Rensa">
    </p>
</form>

<h3>The incoming date is <?= $date ?></h3>

<ul>
    <li><?= $dateStr ?></li>
    <li><?= $monthStr ?></li>
    <li><?= $monthDayStr ?></li>
    <li><?= $weekStr ?></li>
    <li><?= $dayStr ?></li>
</ul>