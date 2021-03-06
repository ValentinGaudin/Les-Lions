<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Parc de Parilly - The Lions</title>

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

    <h1 class="article_titre parcParilly">Parc de Parilly</h1>

    <div class='tagetdate'>
        <div class='tag'>
            <p>Catégorie : <br><a href='../sports.php' >#sports</a></p>
        </div>
        <div class='dateparu'>
            <p>Date de parution : 20/01/2021</p>
        </div>
    </div>
    <div class="placement">
    <div class='article_contenu'>
        <p>Situé à l’Est de la ville de Lyon, sur les communes de Bron et de Vénissieux, il a été créé en 1937. D’une superficie de 178 hectares, il est aujourd’hui très bien desservi, notamment par la ligne de métro D et 2 lignes de tramway. Il est très bien doté en équipements sportifs avec notamment 11 terrains de football, 7 terrains de basket-ball, 2 pistes d’athlétisme, 1 terrain de rugby, 3 de handball, 1 de baseball et 1 de cricket.</p>
        <p>Un peu d’histoire  l’idée de créer un autre poumon vert pour la ville de Lyon est né en 1926. La commune de Bron est choisie alors que la priorité pour cette dernière est la création de logement pour les ouvriers de la commune. En 1937, le conseil départemental souhaite lancer un grand projet avec de gros équipement (notamment une patinoire et un centre aquatique) mais la seconde guerre mondiale mais à mal ce projet qui devait faire du parc de Parilly le plus beau parc de France. Enfin c’est en 1965 qu’est inauguré l’hippodrome de Parilly, hippodrome qui propose aujourd’hui environ 66 manifestations par an.</p>
        <p>Pour les activités sportives, on peut pratiquer la randonnée, la marche sportive, le vélo, la course à pied et utiliser gratuitement toutes les infrastructures disponibles. De nombreuses associations proposent des activités qui utilisent les équipements disponible. Alors si vous ne souhaitez pas pratiquer en solo, n’hésitez pas à vous rapprocher de ces dernières.</p>
        <p>Informations pratiques  beaucoup d’accès possible notamment à l’ouest et nord  ouest via le métro D à la station Mermoz Pinel ou plus proche du parc à la station Stade de Parilly. Coté Bron nous avons plusieurs ligne de Bus qui longe le Parc. A noter qu’il est plutôt facile de stationner tout autour du parc pour les personnes qui viennent de loin.</p>
        
        <br>
        
    </div>

    <div class="mapSM">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.3445941359714!2d4.895578315472092!3d45.72418372407902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4c22bee7bff6b%3A0x22b5b691f0a98cbe!2sParc%20de%20Parilly!5e0!3m2!1sen!2sfr!4v1633524128671!5m2!1sen!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="mapMD">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2785.3445941359714!2d4.895578315472092!3d45.72418372407902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4c22bee7bff6b%3A0x22b5b691f0a98cbe!2sParc%20de%20Parilly!5e0!3m2!1sen!2sfr!4v1633524128671!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

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
