<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mamamia - The Lions</title>

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

        <h1 class="article_titre mamamia">MamaMia Pizza</h1>

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
        <p>

Implantée depuis 2007 à Lyon, Pizza Mamamia est aujourd’hui devenue une institution de la cuisine Italienne. Sous les ordres de Jordan Tomas, au palmarès impressionnant dans le monde des pizzaïolos, l’établissement a grandit au fil des années au point de devenir une référence dans son domaine au point d’être élue meilleure pizzeria de France en 2018 par TripAdvisor.<br>
Pizza Mamamia, c’est le choix de produits de saisons et de qualité, l’association de saveurs, vous permettant de déguster une pizza à la préparation unique et au goût exceptionnel ! A découvrir si vous souhaitez vivre une expérience culinaire inégalée! 
</p>    
        <br>
        
    </div>



    <div class="mapSM">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.636313880257!2d4.8376727154725545!3d45.7383879231269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea3b9796d809%3A0xe4a0fb11b91b38a2!2sJordan%20Tomas%20-%20Pizza%20Mamamia%20Lyon%20Gerland!5e0!3m2!1sen!2sfr!4v1633523549048!5m2!1sen!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="mapMD">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.636313880257!2d4.8376727154725545!3d45.7383879231269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea3b9796d809%3A0xe4a0fb11b91b38a2!2sJordan%20Tomas%20-%20Pizza%20Mamamia%20Lyon%20Gerland!5e0!3m2!1sen!2sfr!4v1633523549048!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
