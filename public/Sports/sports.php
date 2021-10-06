<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Lions</title>

        <link rel="stylesheet" type="text/css" href="/articlePageStyle.css"> 
        <link rel="stylesheet" type="text/css" href="/header.css">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@100&display=swap" rel="stylesheet">
        <?php
        // set the default timezone to use.
        date_default_timezone_set('Etc/GMT+11');
        ?>
</head>

<body>
    <!-- Barre de navgiation & bannière -->
        <?php include("../header.php"); ?>

        <h1>Les plus beaux spots de sport à Lyon !</h1>

<section class="sectionArticles">

    <article class="positioningImage parcTeteDor ">
        <a href="Articles/parctetedor.php">
            <h2>Parc de la tête d'or</h2>
            
            <p class="description positioning">Véritable poumon de la métropole de Lyon, cet espace de nature est largement accessible aux citadins. D’une superficie de 105 hectares, il a en son sein un lac de 16 hectares. Depuis octobre 2006, la partie zoo a été transformé afin d’accueil une plaine africaine. Elle permet de voir, au sein d’un même espace, une mixité d’animaux d’Afrique.</p>
            <div class='article_notation'>
                <img src="/images/red-star.png">
            </div>
        </a> 
    </article>

    <article class="positioningImage parcParilly">
        <a href="Articles/parcParilly.php">
            <h2>Parc de Parilly</h2>
            
            <p class="description positioning">Situé à l’Est de la ville de Lyon, sur les communes de Bron et de Vénissieux, il a été créé en 1937. D’une superficie de 178 hectares, il est aujourd’hui très bien desservi, notamment par la ligne de métro D et 2 lignes de tramway. Il est très bien doté en équipements sportifs avec notamment 11 terrains de football, 7 terrains de basket-ball, 2 pistes d’athlétisme, 1 terrain de rugby, 3 de handball, 1 de baseball et 1 de cricket.</p>
            <div class='article_notation'>
                <img src="/images/red-star.png">
            </div>
        </a> 
    </article>

    <article class="positioningImage climbUp">
        <a href="Articles/climbUp.php"> 
            <h2>Climb Up</h2>
            
            <p class="description positioning">Pour les amateurs d’escalade, il est possible sur Lyon de pratiquer l’escalade dans de nombreux endroit notamment chez Climb-Up à Confluence. En effet c’est au cœur du centre commerciale qu’à ouvert cette structure avec un espace pour les enfants et un parcours aventure avec pont de singe, Tyrolienne etc. On peut aussi s’adonner au saut dans le vide de plus de 15 mètres de haut. Mais c’est surtout les 200 voies proposées et modifiées régulièrement sur une hauteur pouvant allée jusqu’à 22 mètres de hauteur qui vont ravir les pratiquants. Ouvert 7 jours sur 7 de 10h à 23h30.</p>
            <div class='article_notation'>
                <img src="/images/red-star.png">
            </div>
        </a>    
    </article>

</section>
<div class="div-bouton-up"><div class="bouton-up"><a href="#top"><img id="bouton" src="/images/fleche-bouton-up.png" alt="up button"></a></div></div>
</body>
</html>