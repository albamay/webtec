<?php

include('../config/config.php');
$title = 'Om mig själv';
include('../view/header.php');
?>
    <main class="main">
    <article class="article">
        <header>
            <h1>Om Mig Själv</h1>
            <p class="author">Skriven av Paddan, uppdaterad <time datetime="2022-06-29">2022-06-29</time>.</p>
        </header>

        <figure class="figure right">
        <img src="img/pasteltoad2.png" width="300" class="me" alt="Bild på mig">
            <figcaption>Paddan</figcaption>
        </figure>

        <p>Hej! Jag är paddan och är duktig på att skapa problem och spendera timmar på att lösa dom. Så programering är perfekt för mig....gillar jag att tro. Älskar regn, lugna dagar och vackra saker. Vackra saker som skog, målningar, berg och mjuka kuddar. Jag är här för att lära mig att programera och få jobb inom området. Jag älskar min damm så mycket att jag har valt att studera distans i webbprogrammering för 120 poäng. Har studerat tidigare inom filisofi, politik och ekonomi, men vill skriva min kandidat inom programmering</p> 
    </article>
</main>

<?php
include('../view/byline.php');
include('../view/footer.php');
?>