<?php

include('../config/config.php');
$title = 'Is it Friday?';
include('../view/header.php');
$date = $_GET["date"] ?? date('Y-m-d');


$timestampToday = time();
$timestamp = strtotime($date);

$dateStr =      date('Y-m-d', $timestamp);
$monthStr =     date('F', $timestamp);
$monthDayStr =  date('t', $timestamp);
$weekStr =      date('W', $timestamp);
$dayStr1 =       date('l', $timestamp);

$dayNum =       date('N');
$dayStr =       date('l', $timestampToday);
$dateStrToday = date('Y-m-d', $timestampToday);
$week =         date('W', $timestampToday);
$dayToday =     date('l', $timestampToday);


$todayMessage = "Today is $dayToday in week $week and the date is $dateStrToday.";


$message = "Today is $dayStr, NOT Friday!!!";


// Check if it is friday, day 5 in the week
if ($dayNum == 5) {
    // Change the message if it is Friday
    $message = "Hurray!!! Today it is $dayStr!!!";
}


// How many days left to Friday?
$daysLeft = 0;
if ($dayNum < 5) {
    $daysLeft = 5 - $dayNum;
    $message = "$message $daysLeft days left...";
} elseif ($dayNum > 5) {
    $daysLeft = 7 - $dayNum + 5;
    $message = "$message It was just Friday but it will come again in $daysLeft days.";
} else {
    $message = "$message Horrayyy Friday!!!";
}

?>

<main class="main">
    <article class="article">

        <h4><?= $message ?></h4>

        <iframe width="560" height="315" 
        
        src="https://www.youtube.com/embed/uYSqjUuOBmY?si=783ziXNYpt-Vy2y6"
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>

        </iframe>


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

        <p>The incoming date is <?= htmlentities($date)?></p>

        <ul>
            <li><p>The date is: <?= $dateStr ?></li><p>
            <li><p>Month: <?= $monthStr ?></li><p>
            <li><p>Days in the month: <?= $monthDayStr ?></li><p>
            <li><p>Week: <?= $weekStr ?></li><p>
            <li><p>Weekday: <?= $dayStr1 ?></li><p>
        </ul>

    </article>
</main>

<?php

include('../view/footer.php');

?>
