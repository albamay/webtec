<?php
include('../config/config.php');
$title = 'Om kurs och webbplatsen';
include('../view/header.php');
?>

<!--<main class="main"> 
    <article class="article">
        <h1>Om kursen och webbplatsen</h1>
        <a href="https://dbwebb-se.github.io/webtec/">Github</a>
        <p>Detta är en websida gjord för min webtec kurs, PA1439, webbteknologier.</p>
        <img src="img/abouttoad.png" width="300" class="me" alt="Bild på mig">
    </article>
</main> -->

<div class="two-col-layout">
    <main class="main">
        <article class="article">
        <h1>Om kursen och webbplatsen</h1>
        <p>Detta är en websida gjord för min webtec kurs, PA1439, webbteknologier.</p>
        <img src="img/abouttoad.png" width="300" class="me" alt="Bild på mig">   
        </article>
    </main>
    <aside class="aside">
        <h4>Kursen</ha>
        <ul>
            <li><a href="https://dbwebb-se.github.io/webtec/">Github</a></li>
    </aside>
</div>
<?php include('../view/footer.php') ?>