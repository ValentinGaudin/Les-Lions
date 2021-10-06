<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Musée d'Art Contemporain - The Lions</title>

        <link rel="stylesheet" type="text/css" href="/articleStyle.css">
        <link rel="stylesheet" type="text/css" href="/header.css">
        <link rel="stylesheet" type="text/css" href="/articlePageStyle.css"> 
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

        <h1 class="article_titre mac">Musée d'Art Contemporain</h1>
            <div class='tagetdate'>
                <div class='tag'>
            <p>Catégorie : <br><a href='../culture.php' ><b>#Culture</b></a></p>
        </div>

        <div class='dateparu'>
                <p>Date de parution : <b>01/10/2021</b></p>
            </div>
        </div>

        <div class="placement">
    <div class='article_contenu'>
        <p>Faisant partie de l'ancien Palais de la foire de Lyon, le Musée d'art contemporain de Lyon, souvent dénommé "MAC" est un musée du 6ème arrondissement consacré à l'art contemporain.<br>
        Actuellement, le MAC est également une partie du Musée des Beaux Arts de Lyon, vous pourrez avoir plus d'informations dans son article dédié dans notre site.<br>
        Ce musée a pu accueillir nombre d'expositions au cours de sa vie comme "Andy Warhol, l'oeuvre ultim" ou encore le 14e Biennale d'art contemporain.</p>    
        <br>
        
    </div>

    <div class="mapSM">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.34979865548!2d4.850185015473929!3d45.7842194200537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eac1005dddef%3A0x38e1731b252bc392!2sMus%C3%A9e%20d&#39;art%20contemporain%20de%20Lyon!5e0!3m2!1sen!2sfr!4v1633522986431!5m2!1sen!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="mapMD">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2782.34979865548!2d4.850185015473929!3d45.7842194200537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4eac1005dddef%3A0x38e1731b252bc392!2sMus%C3%A9e%20d&#39;art%20contemporain%20de%20Lyon!5e0!3m2!1sen!2sfr!4v1633522986431!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
