<?php
// define variables and set to empty values
$firstNameErr = $lastNameErr = $userEmailErr = $sujetErr = $userPhoneNumberErr = $userMessageErr = $fileErr = "";
$firstName = $lastName = $userEmail = $sujet = $userPhoneNumber = $userMessage = "";
//Tableau des extensions que l'on accepte
$extensions = ['jpg', 'png', 'jpeg', 'gif'];
//Taille max que l'on accepte
$maxSize = 400000;
//récuperation des valeurs du $_FILES pour le fichier upload.
$tmpName = $_FILES['photosuggest']['tmp_name'];
$name = $_FILES['photosuggest']['name'];
$size = $_FILES['photosuggest']['size'];
$error = $_FILES['photosuggest']['error'];
$retour = "";

//echo $_SERVER["REQUEST_METHOD"]; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    //echo "first name est vide";
    $firstNameErr = "First Name is required<br>";
    echo $firstNameErr;
    //$previous = $_SERVER['HTTP_REFERER'];
    //echo $previous;
  } else {
    $firstName = filter_var($_POST["firstname"], FILTER_CALLBACK,
    array("options"=>"strtoupper"));
  }

  if (empty($_POST["lastname"])) {
    $lastNameErr = "Last Name is required<br>";
    echo $lastNameErr;
  } else {
    $lastName = filter_var($_POST["lastname"], FILTER_CALLBACK,
    array("options"=>"strtoupper"));
  }
  
  if (empty($_POST["titlesuggest"])) {
    $sujetErr = "Sujet is required<br>";
    echo $sujetErr;
  } else {
    $sujet = filter_var($_POST["titlesuggest"], FILTER_CALLBACK,
    array("options"=>"strtoupper"));
  }

  if (empty($_POST["user_mail"])) {
    $userEmailErr = "Email is required<br>";
    echo $userEmailErr;
  } else {
    $userEmail = filter_var($_POST["user_mail"], FILTER_VALIDATE_EMAIL);
  }

  if (!empty($_POST["user_phone"])) {
    $userPhoneNumber = filter_var($_POST["user_phone"], FILTER_CALLBACK,
    array("options"=>"strtoupper"));
  }

  if (empty($_POST["contentsuggest"])) {
    $userMessageErr = "Message is required<br>";
    echo $userMessageErr;
  } else {
    $userMessage = filter_var($_POST["contentsuggest"], FILTER_CALLBACK,
    array("options"=>"strtoupper"));
  }
  
  $tabExtension = explode('.', $name);
  $extension = strtolower(end($tabExtension));

  if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
     $uniqueName = uniqid('', true);
     //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
     $file = $uniqueName.".".$extension;
     //$file = 5f586bf96dcd38.73540086.jpg
     move_uploaded_file($tmpName, './upload/'.$file);
  }
  else{
     $fileErr = "Mauvaise extension ou taille trop grande";
  }
  if (empty($firstNameErr)&&empty($lastNameErr)&&empty($sujetErr)&&empty($userEmailErr)&&empty($userPhoneNumberErr)&&empty($userMessageErr)&&empty($fileErr)) {
      $retour = "Merci pour votre suggestion !";
  }
}


?>
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
        <section class="lastArticle container" >
          <div class="thanks">
            <?php
              if ($retour == "") {
                echo "<h1> $firstNameErr <br> $lastNameErr <br> $userEmailErr <br> $sujetErr <br> $userPhoneNumberErr <br> $userMessageErr <br> $fileErr </h1>";  
              } else {
                echo "<h1> $retour </h1>"; 
              }
            ?>
          </div>
        
          <div class="return" >

            <a class="returnnav" id="backindex" href="index.php">Retour à la page d'accueil</a>

          </div>
        </section>
        <!-- Contiendras les informations de production et le chatbot!-->


        <div class="div-bouton-up"><div class="bouton-up"><a href="#top"><img id="bouton" src="/images/fleche-bouton-up.png" alt="up button"></a></div></div>
</body>

</html>