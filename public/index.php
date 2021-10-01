<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The Lions</title>

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
                
                        <article class="bocuse positioningImage" >
                        <h2>Paul Bocuse</h2>
                                <a href="/Restaurants/Articles/article_default.php"> <img class="imageArticle"></a>
                                <p class="description" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum unde repudiandae nisi fugiat iure, quam alias quibusdam! Quae, distinctio nostrum?
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro cupiditate fuga itaque culpa quasi accusamus in alias voluptatum, ex molestiae quidem iusto quisquam doloremque obcaecati similique voluptates quod, quo voluptate!
                                </p>
                        </article>
                
                        <article class="parcTeteDor positioningImage" >
                        <h2>Le parc de la tête d'or</h2>
                                <a href=""> <img class="imageArticle"></a>
                                <p class="description" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum unde repudiandae nisi fugiat iure, quam alias quibusdam! Quae, distinctio nostrum?
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem ipsum iusto, itaque aliquid, eligendi qui quasi earum minus, rem reiciendis mollitia minima corrupti sint harum? Porro, nemo. Delectus, at nostrum!
                                </p>
                        </article>
                
                
                        <article class="museum positioningImage" >
                        <h2>Le musée de confluence</h2>
                                <a href="#"> <img class="imageArticle"></a>
                                <p class="description" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum unde repudiandae nisi fugiat iure, quam alias quibusdam! Quae, distinctio nostrum?
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt porro architecto nemo reprehenderit quibusdam praesentium, ipsa, quaerat, reiciendis vitae sit maiores adipisci vel veritatis libero. Quis tenetur officiis tempora doloribus.
                                </p>
                        </article>
                        
                
                        <article class="bar positioningImage" > 
                        <h2>Le soda Bar</h2>
                                <a href="#"> <img class="imageArticle"></a>
                                <p class="description" > Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum unde repudiandae nisi fugiat iure, quam alias quibusdam! Quae, distinctio nostrum?
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione reiciendis sapiente, numquam tempora accusantium labore error, ea praesentium, delectus aliquid autem quos corrupti illum corporis sunt. Dolorem nihil eveniet doloremque.
                                </p>
                        </article>
                
                
                        <article class="placeBellecour positioningImage" >
                        <h2>Place Bellecour</h2>
                                <a href="#"> <img class="imageArticle"></a>
                                <p class="description" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum unde repudiandae nisi fugiat iure, quam alias quibusdam! Quae, distinctio nostrum?
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione reiciendis sapiente, numquam tempora accusantium labore error, ea praesentium, delectus aliquid autem quos corrupti illum corporis sunt. Dolorem nihil eveniet doloremque.
                                </p>
                        </article>

                        <article class="fourviere positioningImage" >
                        <h2>Fourvière</h2>
                                <a href="#"> <img class="imageArticle"></a>
                                <p class="description" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum unde repudiandae nisi fugiat iure, quam alias quibusdam! Quae, distinctio nostrum?
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione reiciendis sapiente, numquam tempora accusantium labore error, ea praesentium, delectus aliquid autem quos corrupti illum corporis sunt. Dolorem nihil eveniet doloremque.
                                </p>
                        </article>
                
        </section>

        <!-- Contiendras les informations de production et le chatbot!-->


        <div class="div-bouton-up"><div class="bouton-up"><a href="#top"><img id="bouton" src="/images/fleche-bouton-up.png" alt="up button"></a></div></div>
</body>

</html>
