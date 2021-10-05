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
        date_default_timezone_set('UTC');
        ?>
</head>

<body>
        <!-- Barre de navgiation & bannière -->
<?php include("../header.php"); ?>
        <h1>Restaurants à Lyon</h1>

<section class="sectionArticles container">


        <article class="positioningImage leBoeufDargent">
                <h2><a href="/Restaurants/Articles/le_boeuf_dArgent.php">Le Boeuf d'Argent</a></h2>
        
                
                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class='article_notation'>
                <img src="/images/red-star.png">
                </div>
        </article>


        <article class="positioningImage mamamia">
                        <h2><a href="/Restaurants/Articles/Mamamia.php">MamaMia Pizza</a></h2>
                
                <p class="description">Implantée depuis 2007 à Lyon, Jordan Tomas – Pizza Mamamia est aujourd’hui devenue une institution de la cuisine Italienne. Sous les ordres de Jordan Tomas, au palmarès impressionnant dans le monde des pizzaïolos, l’établissement a grandit au fil des années au point de devenir une référence dans son domaine au point d’être élue meilleure pizzeria de France en 2018 par TripAdvisor</p>
                <div class='article_notation'>
                <img src="/images/red-star.png">
                </div>
        </article>

        <article class="positioningImage warung">
                        <h2><a href="/Restaurants/Articles/my_little_warung.php">My Little Warung</a></h2>
                
                <p class="description">Bienvenue dans un monde de fraîcheur, de saveurs authentiques, dans une ambiance décontractée. Respirez profondément et embarquez pour un voyage… au cœur de l’Asie du sud-est.</p>
                <div class='article_notation'>
                <img src="/images/red-star.png">
                </div>

        </article>

        <article class="positioningImage bistrotOrcia">
                        <h2><a href="/Restaurants/Articles/bistrot_orcia.php">Bistrot Orcia</a></h2>
                
                <p class="description">Bistrot Croix Rousse, à deux pas du Gros Cailloux, une équipe de passionnés vous accueille dans un cadre élégant et chaleureux où tout a été pensé  pour votre confort.</p>
                <div class='article_notation'>
                <img src="/images/red-star.png">
                </div>
        </article>

</section>
<div class="div-bouton-up"><div class="bouton-up"><a href="#top"><img id="bouton" src="/images/fleche-bouton-up.png" alt="up button"></a></div></div>
</body>
</html>