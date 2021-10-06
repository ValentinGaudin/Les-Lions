<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Page d'Accueil - The Lions</title>
        <link rel="stylesheet" type="text/css" href="indexStyle.css">
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
        
        <!-- Contiendras la bannière de présentation et la nav bar!-->
        <?php include("header.php"); ?>
        
        <!-- Article dans l'index -->

        <h1> Derniers ajout des Lions.</h1>

        <section class="lastArticle container" >
                
                        <article class="leBoeufdArgent positioningImage" >
                                
                                <h2> <a href="/Restaurants/Articles/le_boeuf_dArgent.php">Le Boeuf d'Argent</a></h2>
                                <p class="description positioning" >Situé dans le Vieux Lyon, Le Boeuf d’Argent et son chef Lyonnais renommé : Mr Giraud, Henri Balland proposent une cuisine maison de qualité dans un cadre intimiste et chaleureux.

                                </p>
                        </article>
                
                        <article class="parcTeteDor positioningImage" >

                                <h2> <a href="Sports/Articles/parctetedor.php">Le parc de la tête d'or</a></h2>
                                        
                                        <p class="description positioning" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum unde repudiandae nisi fugiat iure, quam alias quibusdam! Quae, distinctio nostrum?
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem ipsum iusto, itaque aliquid, eligendi qui quasi earum minus, rem reiciendis mollitia minima corrupti sint harum? Porro, nemo. Delectus, at nostrum!
                                        </p>
                                        <div class='article_notation'>
                                                <img src="/images/red-star.png">
                                        </div>
                                
                        </article>
                
                
                        <article class="museum positioningImage" >
                        <h2> <a href="#">Le musée de confluence</a></h2>

                                
                                <p class="description positioning" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum unde repudiandae nisi fugiat iure, quam alias quibusdam! Quae, distinctio nostrum?
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt porro architecto nemo reprehenderit quibusdam praesentium, ipsa, quaerat, reiciendis vitae sit maiores adipisci vel veritatis libero. Quis tenetur officiis tempora doloribus.
                                </p>
                        </article>
                        
                

                        <article class="positioningImage leFlorian"> 
                                
                                        <h2><a href="Bars/Articles/leFlorian.php">Le bar Le Florian</a></h2>
                                        
                                        <p class="description positioning">Situé dans le vieux Lyon, inspiré du célèbre café de la place Saint-Marc de Venise, vous trouverez un large choix de cocktail et de spiritueux d’exception. Dans une ambiance tamisée et jazz, vous trouverez un personnel au petit soin et très professionnel.</p>
                                        <div class='article_notation'>
                                                <img src="/images/red-star.png">
                                        </div>
                                
                        </article>
                
                
                        <article class="placeBellecour positioningImage" >

                        <h2> <a href="#"> Place Bellecour</a></h2>

                                <p class="description positioning" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum unde repudiandae nisi fugiat iure, quam alias quibusdam! Quae, distinctio nostrum?
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione reiciendis sapiente, numquam tempora accusantium labore error, ea praesentium, delectus aliquid autem quos corrupti illum corporis sunt. Dolorem nihil eveniet doloremque.
                                </p>
                        </article>

                        <article class="fourviere positioningImage" >
                        <h2><a href="#">Fourvière</a></h2>
                                
                                <p class="description positioning" >Créée à l'aube du XXème siècle en 1897, la Basilique de Fourvière a été edifiée en l'honneur et dans l'esprit de rendre grâce à la Vierge Marie.
                                </p>
                        </article>
                
        </section>

        <!-- Contiendras les informations de production et le chatbot!-->


        <div class="div-bouton-up"><div class="bouton-up"><a href="#top"><img id="bouton" src="/images/fleche-bouton-up.png" alt="up button"></a></div></div>

</body>

</html>
