<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Lions</title>

        <link rel="stylesheet" type="text/css" href="/articleStyle.css">
        <link rel="stylesheet" type="text/css" href="/articlePageStyle.css"> 
        <link rel="stylesheet" type="text/css" href="/header.css">

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

    <div class='article_contenu'>
        <p>Bienvenue dans un monde de fraîcheur, de saveurs authentiques, dans une ambiance décontractée. Respirez profondément et embarquez pour un voyage… au cœur de l’Asie du sud-est.<br>
        My Little Warung forme la communauté de ses clients, de ses collaborateurs et de ses franchisés, les « warungers »<br>
        Accueil, qualité des plats, plaisir et confort dans un esprit zen, c’est ça l’esprit Warung !</p>    
        <br>
        
    </div>

    <div class='article_notation'>

        <p>Vous avez aimez l'article ? Rajoutez lui une étoile !</p>
        <img src="/images/red-star.png">
    </div>

</div>
<div class="div-bouton-up"><div class="bouton-up"><a href="#top"><img id="bouton" src="/images/fleche-bouton-up.png" alt="up button"></a></div></div>
</body>
