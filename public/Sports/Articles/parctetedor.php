<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Parc de la Tête d'Or - The Lions</title>

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

    <h1 class="article_titre parcTeteDor">Parc de la Tête d'or</h1>

    <div class='tagetdate'>
        <div class='tag'>

            <p>Catégorie :<br> <a href='../sports.php' >#sports</a></p>

        </div>
        <div class='dateparu'>
            <p>Date de parution : 11/01/2021</p>
        </div>
    </div>
<div class="placement">
    
    <div class='article_contenu'>
        <p>Véritable poumon de la métropole de Lyon, cet espace de nature est largement accessible aux citadins. D’une superficie de 105 hectares, il a en son sein un lac de 16 hectares. Depuis octobre 2006, la partie zoo a été transformé afin d’accueil une plaine africaine. Elle permet de voir, au sein d’un même espace, une mixité d’animaux d’Afrique.</p>
        <p>Un peu d’histoire : c’est en 1857 que Lyon se dote d’un parc paysager. Il a fallu dans un premier temps mettre en place des digues afin de se préserver du fleuve Rhône. Puis, en quatre ans, le parc a été créé. A l’image du Bois de Boulogne et des jardins anglais, l’organisation n’a pas tellement évolué. C’est en 1904 et en 1912 que Tony Garnier a apporté quelques modernisations avec notamment la vacherie du Parc (laiterie municipale chargée de fournir du lait aux orphelins Lyonnais).</p>
        <p>Au niveau des activités sportives, vous pouvez courir en faisant notamment le tour du parc (4,8 km) mais aussi en son sein, si vous ne souhaitez pas être dans la mêlée. Vous pouvez pratiquer le roller avec un espace situé au niveau de l’allée de ceinture prêt de l’entrée principale. Le vélo aussi est autorisé au sein du parc mais pour les spécialistes, il y a aussi, sur la grande île, un vélodrome. Enfin il est possible de faire de la barque sur le plan d’eau.</p>
        <p>Information pratique  avec ses 8 portes d’accès, le parc est très accessible. Que se soit par le 6ième arrondissement, avec la porte principale coté Rhône ou par Villeurbanne au niveau du boulevard Bataille de Stalingrad mais aussi au nord avec la situé International.</p>
        
        <br>

    </div>
    <div class="mapSM">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5567.525634167244!2d4.830731344323251!3d45.75590073120873!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea537bdc5ab3%3A0x5d9d9385f58b2047!2sPlace%20Bellecour!5e0!3m2!1sen!2sfr!4v1633515869814!5m2!1sen!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="mapMD">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5567.525634167244!2d4.830731344323251!3d45.75590073120873!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea537bdc5ab3%3A0x5d9d9385f58b2047!2sPlace%20Bellecour!5e0!3m2!1sen!2sfr!4v1633515869814!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
