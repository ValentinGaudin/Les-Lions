<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Basilique de Fourvière - The Lions</title>

        <link rel="stylesheet" type="text/css" href="/articleStyle.css">
        <link rel="stylesheet" type="text/css" href="/header.css">
        <link rel="stylesheet" type="text/css" href="/articlePageStyle.css"> 

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
    <h1 class="article_titre fourviere">Basilique de Fourvière</h1>
        <div class='tagetdate'>
        <div class='tag'>
            <p>Catégorie :<br> <a href='../culture.php' ><b>#Culture</b></a></p>
        </div>
        <div class='dateparu'>
            <p>Date de parution : <b>01/10/2021</b></p>
        </div>
        </div>
    
<div class="placement">
    <div class='article_contenu'>
        <p>Créée à l'aube du XXème siècle en 1897, la Basilique de Fourvière a été edifiée en l'honneur et dans l'esprit de rendre grâce à la Vierge Marie.<br>
        C'est également pour remercier cette dernière d'avoir épargné la ville lors de la guerre Franco-Prussienne ayant eu lieu en 1870.<br>
        La basilique se trouve sur la colline de Frouvière, disposant d'un large panorama de Lyon et accueillant plus de 2 millions de visiteurs chaque année.</p>    
        <br>
        
    </div>

    <div class="mapSM">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.443745588437!2d4.820437315473236!3d45.76229652152391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eba97571522b%3A0x9d1bcc791b678e29!2sLa%20Basilique%20Notre%20Dame%20de%20Fourvi%C3%A8re!5e0!3m2!1sen!2sfr!4v1633522947887!5m2!1sen!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="mapMD">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.443745588437!2d4.820437315473236!3d45.76229652152391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eba97571522b%3A0x9d1bcc791b678e29!2sLa%20Basilique%20Notre%20Dame%20de%20Fourvi%C3%A8re!5e0!3m2!1sen!2sfr!4v1633522947887!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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

</body>
