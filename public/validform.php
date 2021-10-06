<?php
echo "Valeur de POST : <br>";
var_dump($_POST);
echo "Valeur du FILES : <br>";
var_dump($_FILES);

// define variables and set to empty values
$firstNameErr = $lastNameErr = $userEmailErr = $sujetErr = $userPhoneNumberErr = $userMessageErr = "";
$firstName = $lastName = $userEmail = $sujet = $userPhoneNumber = $userMessage = "";

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

  if (empty($_POST["user_phone"])) {
    $userPhoneNumberErr = "Phone Number is required<br>";
    echo $userPhoneNumberErr;
  } else {
    $userPhoneNumber = filter_var($_POST["user_phone"], FILTER_CALLBACK,
    array("options"=>"strtoupper"));
  }

  if (empty($_POST["user_message"])) {
    $userMessageErr = "Message is required<br>";
    echo $userMessageErr;
  } else {
    $userMessage = filter_var($_POST["user_message"], FILTER_CALLBACK,
    array("options"=>"strtoupper"));
  }
  
    $tmpName = $_FILES['photosuggest']['tmp_name'];
    $name = $_FILES['photosuggest']['name'];
    $size = $_FILES['photosuggest']['size'];
    $error = $_FILES['photosuggest']['error'];

    $tabExtension = explode('.', $name);
    $extension = strtolower(end($tabExtension));
//Tableau des extensions que l'on accepte
    $extensions = ['jpg', 'png', 'jpeg', 'gif'];
//Taille max que l'on accepte
    $maxSize = 400000;
    if(in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
        $uniqueName = uniqid('', true);
        //uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
        $file = $uniqueName.".".$extension;
        //$file = 5f586bf96dcd38.73540086.jpg
    }
    else{
        echo "Mauvaise extension ou taille trop grande";
    }
    if (empty($firstNameErr)&&empty($lastNameErr)&&empty($sujetErr)&&empty($userEmailErr)&&empty($userPhoneNumberErr)&&empty($userMessageErr)) {
      echo "Merci ".$_POST['last_name']." ".$_POST['first_name']. 
      " de nous avoir contacté à propos de ". $_POST['sujet']. ".<br>";
      echo "Un de nos conseiller vous contactera soit à l’adresse ".$_POST['user_mail'].
      " ou par téléphone au ". $_POST['user_phone_number'].
      " dans les plus brefs délais pour traiter votre demande : <br>";
      echo $_POST['user_message'];
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

        <h1>Merci pour votre suggestion !</h1>

        <section class="lastArticle container" >

            <a class="returnnav" id="backindex" href="index.php">Retour à la page d'accueil</a>

        </section>
        <!-- Contiendras les informations de production et le chatbot!-->


        <div class="div-bouton-up"><div class="bouton-up"><a href="#top"><img id="bouton" src="/images/fleche-bouton-up.png" alt="up button"></a></div></div>
</body>

</html>