<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bistrot Orcia - The Lions</title>

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

        <h1 class="article_titre bistrotOrcia">Bistrot Orcia</h1>

        <div class='tagetdate'>
        <div class='tag'>
            <p>Catégorie :<br> <a href='../restaurants.php' >#restaurants</a></p>
        </div>
        <div class='dateparu'>
            <p>Date de parution : 01/10/2021</p>
        </div>
    </div>
<div class="placement">
    <div class='article_contenu'>
        <p>

Bistrot Croix Rousse, à deux pas du Gros Cailloux, une équipe de passionnés vous accueille dans un cadre élégant et chaleureux où tout a été pensé  pour votre confort.<br>
La cuisine du bistrot Orcia, élaborée à partir de produits frais et locaux se décline au fil des saisons en menu du marché le midi, en petits plats festifs à partager le soir et en déjeuner convivial le dimanche.<br>
Pour accompagner le tout, un large panel de vins de caractère, de bières belges, de sodas et jus de fruits artisanaux a été rigoureusement sélectionné pour le plus grand plaisir de tous.</p>    
    </div>


    <div class="mapSM">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.7806017689477!2d4.832935815473643!3d45.77558702063262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eae309baaaab%3A0x1d83d46c13e7f217!2sBistrot%20Orcia%20-%20Croix%20Rousse!5e0!3m2!1sen!2sfr!4v1633523299430!5m2!1sen!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="mapMD">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.7806017689477!2d4.832935815473643!3d45.77558702063262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eae309baaaab%3A0x1d83d46c13e7f217!2sBistrot%20Orcia%20-%20Croix%20Rousse!5e0!3m2!1sen!2sfr!4v1633523299430!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
<?php include("footer.php"); ?>
</body>
