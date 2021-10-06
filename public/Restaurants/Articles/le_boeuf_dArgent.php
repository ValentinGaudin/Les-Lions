<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Le Boeuf d'Argent - The Lions</title>

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

        <h1 class="article_titre leBoeufdArgent">Le Boeuf d'Argent</h1>

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
        <p>Situé dans le Vieux Lyon, Le Boeuf d’Argent et son chef Lyonnais renommé : Mr Giraud, Henri Balland proposent une cuisine maison de qualité dans un cadre intimiste et chaleureux.<br>Les différents menus offrent un choix de plats raffinés et très joliment présentés. Les produits sont de qualité, de saison et choisis chez des producteurs locaux.<br>En 2019 le chef obtient pour Le Boeuf d'Argent le titre de Maître Restaurateur: titre d’Etat remis par la Préfecture du Rhône.</p>    
        <br>
        
    </div>

    <div class="mapSM">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.450899869333!2d4.824226515473257!3d45.76215312153362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ebaa567d4519%3A0x5a0b1a0e4f5f705b!2sLe%20B%C5%93uf%20d&#39;Argent!5e0!3m2!1sen!2sfr!4v1633523427023!5m2!1sen!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="mapMD">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.450899869333!2d4.824226515473257!3d45.76215312153362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ebaa567d4519%3A0x5a0b1a0e4f5f705b!2sLe%20B%C5%93uf%20d&#39;Argent!5e0!3m2!1sen!2sfr!4v1633523427023!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
