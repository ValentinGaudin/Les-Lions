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

    <?php include("../header.php"); ?>

        <h1>Lieux culturels et Monuments à Lyon</h1>

<section class="sectionArticles container">

    <article class="fourviere positioningImage" >
        <h2><a href="Articles/fourviere.php">Basilique de Fourvière</h2>
            <img class="imageArticle">
            <p class="description">Créée à l'aube du XXème siècle en 1897, la Basilique de Fourvière a été edifiée en l'honneur et dans l'esprit de rendre grâce à la Vierge Marie.</p>
            </a>
            <p>Une étoile</p>
    </article>

    <article class="mac positioningImage">
        <h2><a href="Articles/mac.php">Musée d'Art Contemporain</h2>
            <img class="imageArticle">
            <p class="description">Faisant partie de l'ancien Palais de la foire de Lyon, le Musée d'art contemporain de Lyon, souvent dénommé "MAC" est un musée du 6ème arrondissement consacré à l'art contemporain.</p>
            </a>
            <p>Une étoile</p>
    </article>

    <article class="mba positioningImage">
        <h2><a href="Articles/mba.php">Musée des Beaux-Arts</h2>
            <img class="imageArticle">
            <p class="description">À la base une abbaye aux abords de la Révolution frnçaise, le musée des Beaux Arts actuel de Lyon à reçu ses premier tableaux en 1803 lorsque le Louvre en offre 110 au Musée de Lyon.</p>
            </a>
            <p>Une étoile</p>
    </article>

    <article class="confluence positioningImage">
        <h2><a href="Articles/confluence.php">Musée des Confluences</h2>
            <img class="imageArticle">
            <p class="description">Le musée des Confluences est un musée à part entière, premièrement avec sa position géographique, se situant au confluent du Rhône et de la Saône.</p>
            </a>
            <p>note</p>
    </article>

</section>
<div class="div-bouton-up"><div class="bouton-up"><a href="#top"><img id="bouton" src="/images/fleche-bouton-up.png" alt="up button"></a></div></div>
</body>
</html>