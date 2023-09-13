<?php

include('../config/config.php');
$title = 'Today';
include('../view/header.php');

// Set the timezone to use
date_default_timezone_set('Europe/Stockholm');

// The date of today
$today = date('Y-m-d H:i:s');

// Name of the week day
$weekday = date('l');

?>

<main class="main"> 
    <article class="article">
    <h1>Dagens datum</h1>
    <p>Dagens datum är <?= $today ?> och idag är det <?= $weekday ?>.</p>
    
    <img src="img/stressedtoad.png" width="300" class="me" alt="Bild på mig">
    </article>
</main>
<?php include('../view/footer.php') ?>