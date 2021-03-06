<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Le Florian - The Lions</title>

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

    <h1 class="article_titre leFlorian">Le Florian</h1>

    <div class='tagetdate'>
        <div class='tag'>
            <p>Catégorie : <br><a href='../bars.php' >#bars</a></p>
        </div>
        <div class='dateparu'>
            <p>Date de parution : 01/09/2021</p>
        </div>
    </div>
  
    <div class="placement">
        <div class='article_contenu'>
            <p>Situé dans le vieux Lyon, inspiré du célèbre café de la place Saint-Marc de Venise, vous trouverez un large choix de cocktail et de spiritueux d’exception. Dans une ambiance tamisée et jazz, vous trouverez un personnel au petit soin et très professionnel.</p>
            <p>Informations pratiques : situé 4 Place de la Baleine, 69005 LYON, l’accès se fait via le métro D à la station Vieux Lyon. L’établissement vous accueil tous les jours de 17h à 2h du Lundi au mercredi, jusqu’à 3h les jeudi et vendredi et les week-end de 14h à 3h le samedi et jusqu’à 2h les dimanche.</p>    
            <br>
        </div>
        <div class="mapSM">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.395266644058!2d4.82628211547328!3d45.76326822145876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ebaabbf19c8d%3A0x577886f950e60b81!2sBar%20Le%20Florian%2C%20Cocktails%20%26%20Spirits!5e0!3m2!1sen!2sfr!4v1633522504675!5m2!1sen!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>


        <div class="mapMD">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.395266644058!2d4.82628211547328!3d45.76326822145876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ebaabbf19c8d%3A0x577886f950e60b81!2sBar%20Le%20Florian%2C%20Cocktails%20%26%20Spirits!5e0!3m2!1sen!2sfr!4v1633522504675!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
</body>
