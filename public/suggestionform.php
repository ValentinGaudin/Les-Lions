<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Lions</title>
        <link rel="stylesheet" type="text/css" href="suggestionform.css">
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

        <h1>Faites une suggestion d'article</h1>

        <section class="lastArticle container" >

        <form class="formsuggest" action="/validform.php" method="POST" enctype="multipart/form-data">

                <div class="firstname formsuggest">
                        <label for="firstname">Nom : </label>
                        <input type="text" name="firstname" id="firstname" maxlength = 50 required>
                </div>

                <div class="lastname formsuggest">
                        <label for="lastname">Prénom : </label>
                        <input type="text" name="lastname" id="lastname" maxlength = 50 required>
                </div>
                <div class="user_phone formsuggest">
                        <label for="user_phone">Votre numéro de téléphone : </label>
                        <input type="tel" name="user_phone" id="user_phone" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" maxlength = 14>
                        <br>
                        <small>Format: 12 34 56 78 90</small>
                </div>
                <div class="user_mail formsuggest">
                        <label for="user_mail">Votre email : </label>
                        <input type="email" name="user_mail" id="user_mail" required>
                </div>

                <div class="titlesuggest formsuggest">
                        <label for="titlesuggest">Titre de l'article suggeré : </label>
                        <input type="text" name="titlesuggest" id="titlesuggest" maxlength = 50 required>
                </div>
                <div class="contentsuggest formsuggest">
                        <label for="contentsuggest">Texte suggeré : </label>
                        <textarea name="contentsuggest" id="contentsuggest" maxlength = 250 required></textarea>
                </div>
                <div class="photosuggest formsuggest">
                        <label for="photosuggest">Photo pour accompagner l'article : </label>
                        <input type="file" name="photosuggest" id="photosuggest" required>
                </div>
                <div class ="buttonsuggest">
                        <input type="submit" value="Soumettre votre suggestion!">
                </div>

        </form>

        </section>

        <!-- Contiendras les informations de production et le chatbot!-->


        <div class="div-bouton-up"><div class="bouton-up"><a href="#top"><img id="bouton" src="/images/fleche-bouton-up.png" alt="up button"></a></div></div>
</body>

</html>
