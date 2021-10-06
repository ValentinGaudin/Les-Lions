<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Little Warung - The Lions</title>

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

        <h1 class="article_titre littleWarung">My Little Warung</h1>

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
        <p>Bienvenue dans un monde de fraîcheur, de saveurs authentiques, dans une ambiance décontractée. Respirez profondément et embarquez pour un voyage… au cœur de l’Asie du sud-est.<br>
        My Little Warung forme la communauté de ses clients, de ses collaborateurs et de ses franchisés, les « warungers »<br>
        Accueil, qualité des plats, plaisir et confort dans un esprit zen, c’est ça l’esprit Warung !</p>    
        <br>
        
    </div>
    <div class="mapSM">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.367621762557!2d4.855672815473264!3d45.76382232142167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ebcdd89133ef%3A0xf4a9e02ad896e1c2!2sMy%20Little%20Warung%20Lyon%20Part-Dieu!5e0!3m2!1sen!2sfr!4v1633524033303!5m2!1sen!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="mapMD">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.367621762557!2d4.855672815473264!3d45.76382232142167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ebcdd89133ef%3A0xf4a9e02ad896e1c2!2sMy%20Little%20Warung%20Lyon%20Part-Dieu!5e0!3m2!1sen!2sfr!4v1633524033303!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
