<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Climb Up - The Lions</title>

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

    <h1 class="article_titre climbUp">Climb Up</h1>

    <div class='tagetdate'>
        <div class='tag'>

            <p>Catégorie :<br> <a href='../sports.php' >#sports</a></p>

        </div>
        <div class='dateparu'>
            <p>Date de parution : 26/01/2021</p>
        </div>
    </div>
<div class="placement">
    <div class='article_contenu'>
        <p>Pour les amateurs d’escalade, il est possible sur Lyon de pratiquer l’escalade dans de nombreux endroit notamment chez Climb-Up à Confluence. En effet c’est au cœur du centre commerciale qu’à ouvert cette structure avec un espace pour les enfants et un parcours aventure avec pont de singe, Tyrolienne etc. On peut aussi s’adonner au saut dans le vide de plus de 15 mètres de haut. Mais c’est surtout les 200 voies proposées et modifiées régulièrement sur une hauteur pouvant allée jusqu’à 22 mètres de hauteur qui vont ravir les pratiquants. Ouvert 7 jours sur 7 de 10h à 23h30.</p>
        <p>Pour les débutants, des formateurs sont disponibles pour vous initier en toute sécurité. Envie d’aller plus loin ? Après une formation sur les règles de sécurités, l’ensemble de la structure vous est accessible. Chacun va à son rythme et il y a toujours la possibilité de prendre un cours particuliers afin de progresser.</p>
        <p>Coté tarif, toutes les formules existes. Que se soit au coup par coup à partir de 16 Euros pour la journée ou par carte de 10 entrées avec un tarif qui tombe à 13 Euros la journée à un abonnement mensuel de 44 Euros sur 12 mois.</p>
        <br>
        
    </div>

    <div class="mapSM">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.399844945976!2d4.83339131547268!3d45.743129422809055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea379bcc2fbf%3A0x6e56ef9cd617614a!2sClimb%20Up%20Lyon%20Gerland!5e0!3m2!1sen!2sfr!4v1633524089225!5m2!1sen!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="mapMD">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.399844945976!2d4.83339131547268!3d45.743129422809055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea379bcc2fbf%3A0x6e56ef9cd617614a!2sClimb%20Up%20Lyon%20Gerland!5e0!3m2!1sen!2sfr!4v1633524089225!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
