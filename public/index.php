<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The Lions</title>

        <link rel="stylesheet" type="text/css" href="/public/indexStyle.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@100&display=swap" rel="stylesheet">
        <?php
        // set the default timezone to use.
        date_default_timezone_set('Etc/GMT+11');
        ?>
</head>

<body>
        
        <!-- Contiendras la bannière de présentation et la nav bar!-->
        <?php include("../main/header.php"); ?>
        

        <!-- Article dans l'index -->

        <h1 class="mainTitle" > Derniers ajout des Lions.</h1>

        <section class="lastArticle container" >
                
                        <article class="bocuse" >
                        <h2 class="title" >Paul Bocuse</2>
                                <a href="#"> <img class="imageArticle" src="/images/restaurant.jpg" alt="Le restaurant de Paul Bocuse" ></a>
                                <p class="description" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum unde repudiandae nisi fugiat iure, quam alias quibusdam! Quae, distinctio nostrum?
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro cupiditate fuga itaque culpa quasi accusamus in alias voluptatum, ex molestiae quidem iusto quisquam doloremque obcaecati similique voluptates quod, quo voluptate!
                                </p>
                        </article>
                
                        <article class="parctetedor" >
                        <h2 class="title" >Le parc de la tête d'or</h2>
                                <a href="#"> <img class="imageArticle" src="" alt="Le parc de la tête d'or" ></a>
                                <p class="description" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum unde repudiandae nisi fugiat iure, quam alias quibusdam! Quae, distinctio nostrum?
                                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem ipsum iusto, itaque aliquid, eligendi qui quasi earum minus, rem reiciendis mollitia minima corrupti sint harum? Porro, nemo. Delectus, at nostrum!
                                </p>
                        </article>
                

                
                        <article class="museum" >
                        <h2 class="title" >Le musée de confluence</h2>
                                <a href="#"> <img class="imageArticle" src="" alt="Le musée de Confluence" ></a>
                                <p class="description" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum unde repudiandae nisi fugiat iure, quam alias quibusdam! Quae, distinctio nostrum?
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt porro architecto nemo reprehenderit quibusdam praesentium, ipsa, quaerat, reiciendis vitae sit maiores adipisci vel veritatis libero. Quis tenetur officiis tempora doloribus.
                                </p>
                        </article>
                        
                
                        <article class="bar" > 
                        <h2 class="title" >Le soda Bar</h2>
                                <a href="#"> <img class="imageArticle" src="" alt="Restaurant de cokctails, Soda Bar" ></a>
                                <p class="description" > Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum unde repudiandae nisi fugiat iure, quam alias quibusdam! Quae, distinctio nostrum?
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione reiciendis sapiente, numquam tempora accusantium labore error, ea praesentium, delectus aliquid autem quos corrupti illum corporis sunt. Dolorem nihil eveniet doloremque.
                                </p>
                        </article>
                
                
                        <article class="placebellecour" >
                        <h2 class="title" >Place Bellecour</h2>
                                <a href="#"> <img class="imageArticle" src="" alt="La plus grande place de Lyon, Bellecour" ></a>
                                <p class="description" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum unde repudiandae nisi fugiat iure, quam alias quibusdam! Quae, distinctio nostrum?
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione reiciendis sapiente, numquam tempora accusantium labore error, ea praesentium, delectus aliquid autem quos corrupti illum corporis sunt. Dolorem nihil eveniet doloremque.
                                </p>
                        </article>


                        <article class="fourviere" >
                        <h2 class="title" >Fourvière</h2>
                                <a href="#"> <img class="imageArticle" src="" alt="Cathédrale notre Dame de Fourvière" ></a>
                                <p class="description" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum unde repudiandae nisi fugiat iure, quam alias quibusdam! Quae, distinctio nostrum?
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione reiciendis sapiente, numquam tempora accusantium labore error, ea praesentium, delectus aliquid autem quos corrupti illum corporis sunt. Dolorem nihil eveniet doloremque.
                                </p>
                        </article>
                
        </section>

        <!-- Contiendras les informations de production et le chatbot!-->
        
        <script src="/script/script.js"></script>


</body>

</html>