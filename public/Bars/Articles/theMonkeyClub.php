<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Monkey Club - The Lions</title>

        <link rel="stylesheet" type="text/css" href="/articleStyle.css">
        <link rel="stylesheet" type="text/css" href="/articlePageStyle.css"> 
        <link rel="stylesheet" type="text/css" href="/header.css">
        <link rel="stylesheet" type="text/css" href="/footer.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@100&display=swap" rel="stylesheet">
        <?php
        // set the default timezone to use.
        date_default_timezone_set('UTC');
        ?>
</head>

<body>
<!-- Barre de navgiation & bannière -->
<?php include ("../../header.php");?>
<div class='article_details'>

    <h1 class="article_titre theMonkeyClub">The Monkey Club</h1>

    <div class='tagetdate'>
        <div class='tag'>

            <p>Catégorie : <br><a href='../bars.php' >#bars</a></p>

        </div>
        <div class='dateparu'>
            <p>Date de parution : 12/09/2021</p>
        </div>
    </div>
<div class="placement">
    <div class='article_contenu'>
        <p>Au cœur de la presqu’île, ce lieu est très atypique. Entre mobilier classique de type victorien et objets insolites, découvrez un choix de cocktails impressionnants et spiritueux old school, le tout agrémenté de petits en-cas histoire de se nourrir un peu.</p>
        <p> Informations pratiques : 19 place de Tolozan 69001 LYON l’établissement vous accueil du mardi au samedi de 18h à 1h et jusqu’à 3h les vendredi et samedi.</p>   
        <br>
        
    </div>

    </div>
    <div class="mapSM">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.0937382751613!2d4.8350747154734774!3d45.76931162105353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eafbe8f88ec1%3A0x5a6aa552c5449a97!2sThe%20Monkey%20Club%20Cocktail%20Bar!5e0!3m2!1sen!2sfr!4v1633522609768!5m2!1sen!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="mapMD">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.0937382751613!2d4.8350747154734774!3d45.76931162105353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eafbe8f88ec1%3A0x5a6aa552c5449a97!2sThe%20Monkey%20Club%20Cocktail%20Bar!5e0!3m2!1sen!2sfr!4v1633522609768!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    
</div>
    <div class='article_notation'>

        <p>Vous avez aimez l'article ? Rajoutez lui une étoile !</p>
        <img id="star" src="/images/star-grey.png" onclick="this.src='/images/star-yellow.png'">
        <p class="ajoutStarNotation">+1</p>
    </div>

</div>
<div class="div-bouton-up"><div class="bouton-up"><a href="#top"><img id="bouton" src="/images/fleche-bouton-up.png" alt="up button"></a></div></div>
<script src="/script/star.js"></script>
<?php include("../../footer.php"); ?>
<script src="/script/footer.js"></script>
</body>
