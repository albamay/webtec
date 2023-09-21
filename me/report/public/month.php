<?php

include('../config/config.php');
$title = 'Calendar?';
include('../view/header.php');
$date = $_GET["date"] ?? date('Y-m-d');
$timestamp = strtotime($date);

//Month
$year =      date('Y', $timestamp);
$month =     date('m', $timestamp);
$monthName = date('F', $timestamp);
$monthDays = date('t', $timestamp);
$date =      date('d', $timestamp);
$weekday =   date('l', $timestamp);
$dayNum =    date('N', $timestamp);


//important date parts
$dateStr =          date('Y-m-d', $timestamp);
$firstDateInMonth = date('Y-m-01', $timestamp);
$lastDateInMonth =  date("Y-m-$monthDays", $timestamp);

//Next and previous month
$timestampPreviousMonth = strtotime($firstDateInMonth . "- 1 day");
$timestampNextMonth =     strtotime($lastDateInMonth . "+ 1 day");

$prevMonth = date('Y-m-01', $timestampPreviousMonth);
$nextMonth = date('Y-m-01', $timestampNextMonth);


//Loop to get all dates of the month into a table row
//Use the timestamp as the base through the loop
$calStr = "";
$aTimestamp = strtotime($firstDateInMonth);

for ($i = 1; $i <= $monthDays; $i++ ) {

    $aDate =        date('d', $aTimestamp);
    $aWeekday =     date('l', $aTimestamp);
    $weeknmbr =     date('W', $aTimestamp);
    $dayoftheyear = date('z', $aTimestamp);


    $calStr .= "<tr>\n";
    $calStr .= '<td>'.$aDate.'<span class = "year"> '.$dayoftheyear."</td>\n";
        
    if ($aWeekday == "Sunday") {
        $calStr .= '<td class = "sunday">'.$aWeekday."</td>\n";
    }
    else if ($aWeekday == "Monday") {
        $calStr .= "<td>$aWeekday, week $weeknmbr</td>\n";
    } 
    else {
        $calStr .= "<td> $aWeekday </td>\n";
    }

    $calStr .= "</tr>\n";

    $aTimestamp = strtotime("+ 1 day", $aTimestamp);

}

?>

<main class="main">
    <article class="article">
        <header>
            <h1>Månadskalender</h1>
        </header>

        <ul>
            <li>Current date: <?= $dateStr ?> <a href="?date=<?= date('Y-m-d') ?>">today</a></li>
            <li>First date in month: <?= $firstDateInMonth ?></li>
            <li>Last date in month: <?= $lastDateInMonth ?></li>
            <li>Previous month: <?= $prevMonth ?> <a href="?date=<?= $prevMonth ?>">previous</a></li>
            <li>Next month: <?= $nextMonth ?> <a href="?date=<?= $nextMonth ?>">next</a></li>
        </ul>

        
        <ul>
        
            <li><p>Year: <?= $year ?></p></li>
            <li><p>Month: <?= $month ?>, <?= $monthName ?></p></li>
            <li><p>Days in month: <?= $monthDays ?></p></li>
            <li><p>Date: <?= $date ?>, <?= $weekday ?>, <?= $dayNum ?></p></li>
            <li><p>Timestamp: <?= $timestamp ?> (now = <?= time() ?>)</p></li>
          
        </ul>

        <table border="2", class="calendar">
            <tr>
                <th><?= $year ?> <?= $monthName ?></th>
            </tr>
            <tr>
                <?= $calStr ?>
            </tr>

        </table>

    </article>
</main>

<?php

include('../view/footer.php');
?>