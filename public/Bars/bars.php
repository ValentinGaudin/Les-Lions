<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bars - The Lions</title>

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
        <?php include("../header.php"); ?>

        <h1>Les meilleurs bars du pays Lyonnais</h1>

<section class="sectionArticles">

    <article class="positioningImage hardRockCafe">
        <h2><a href="Articles/hardRockCafe.php">Hard Rock Cafe</a></h2>
        <p class="description">La célèbre enseigne internationale s’installe enfin à Lyon en 2016 dans le quartier Grôlée sur la presqu’île. Avec une formule plutôt originale tout en gardant l’esprit Rock and Roll propre à la marque. Les espaces sont plus clair dans un design plus épuré. Dans un espace de 800 m², vous trouverez les meilleurs Burger avec un choix de vins de la région.</p>
    </article>

    <article class="positioningImage leFlorian">
        <h2><a href="Articles/leFlorian.php">Le bar Le Florian</a></h2>
        <p class="description">Situé dans le vieux Lyon, inspiré du célèbre café de la place Saint-Marc de Venise, vous trouverez un large choix de cocktail et de spiritueux d’exception. Dans une ambiance tamisée et jazz, vous trouverez un personnel au petit soin et très professionnel.</p>
    </article>

    <article class="positioningImage theMonkeyClub">
        <h2><a href="Articles/theMonkeyClub.php">The Monkey Club</a></h2>
        <p class="description">Au cœur de la presqu’île, ce lieu est très atypique. Entre mobilier classique de type victorien et objets insolites, découvrez un choix de cocktails impressionnants et spiritueux old school, le tout agrémenté de petits en-cas histoire de se nourrir un peu.</p>
    </article>

    <article class="positioningImage diplomatico">
            <h2><a href="Articles/diplomatico.php">Le Diplomatico</a></h2>
            <p class="description">Situé sur les bords de Soane, juste en face du palais de justice, établissement propose un grand choix de boisson, de la classique bière aux cocktails les plus sophistiqués. La décoration a été revu de fond en comble pour offrir aujourd’hui un cadre des plus moderne et raffiné.</p>
    </article>

</section>
<div class="div-bouton-up"><div class="bouton-up"><a href="#top"><img id="bouton" src="/images/fleche-bouton-up.png" alt="up button"></a></div></div>
<?php include("../footer.php"); ?>
</body>
</html>