let firstChoice = document.getElementById('firstChoice');

let choicesSport = document.getElementById('choicesSport');

let sport = document.getElementById('sport');
let culture = document.getElementById('culture');
let bar = document.getElementById('bar');
let restaurant = document.getElementById('restaurant');

let interior = document.getElementById('interior');
let exterior = document.getElementById('exterior');


let choicesCulture = document.getElementById('choicesCulture');

let monument = document.getElementById('monument');
let musee = document.getElementById('musee');


let choicesBar = document.getElementById('choicesBar');

let barJour = document.getElementById('barJour');
let barNuit = document.getElementById('barNuit');


let choicesRestaurant = document.getElementById('choicesRestaurant');

let gastro = document.getElementById('gastro');
let classic = document.getElementById('classic');
let pizza = document.getElementById('pizza');
let street = document.getElementById('street');

sport.addEventListener('click', function chatbotChoixSport(){
        firstChoice.style.display = "none";
        choicesSport.style.display = "block";
        interior.addEventListener('click', function chatbotChoixInterior(){
            location.href="http://localhost:8000/Sports/Articles/climbUp.php";
        });
        exterior.addEventListener('click', function chatbotChoixExterior(){
            exteriorUrl = new Array;
            exteriorUrl[0] = "http://localhost:8000/Sports/Articles/parctetedor.php"
            exteriorUrl[1] = "http://localhost:8000/Sports/Articles/parcParilly.php"

            exteriorChoiceLink = Math.floor(Math.random() * exteriorUrl.length); 
            location.href = exteriorUrl[exteriorChoiceLink]; 
        })

})
culture.addEventListener('click', function chatbotChoixCulture(){
    firstChoice.style.display = "none";
    choicesCulture.style.display = "block";
    monument.addEventListener('click', function chatbotChoixMonument(){
        location.href="http://localhost:8000/Culture/Articles/fourviere.php";
    });
    musee.addEventListener('click', function chatbotChoixMusee(){
        museeUrl = new Array;
        museeUrl[0] = "http://localhost:8000/Culture/Articles/mba.php";
        museeUrl[1] = "http://localhost:8000/Culture/Articles/mac.php";
        museeUrl[2] = "http://localhost:8000/Culture/Articles/confluence.php";

        museeChoiceLink = Math.floor(Math.random() * museeUrl.length); 
        location.href = museeUrl[museeChoiceLink]; 
    })
})
bar.addEventListener('click', function chatbotChoixBar(){
    firstChoice.style.display = "none";
    choicesBar.style.display = "block";
    barJour.addEventListener('click', function chatbotChoixBarJour(){
        barJourUrl = new Array;
        barJourUrl[0] = "http://localhost:8000/Bars/Articles/theMonkeyClub.php";
        barJourUrl[1] = "http://localhost:8000/Bars/Articles/hardRockCafe.php";

        barJourChoiceLink = Math.floor(Math.random() * barJourUrl.length); 
        location.href = barJourUrl[barJourChoiceLink]; 

    })
    barNuit.addEventListener('click', function chatbotChoixBarNuit(){
        barNuitUrl = new Array;
        barNuitUrl[0] = "http://localhost:8000/Bars/Articles/leFlorian.php";
        barNuitUrl[1] = "http://localhost:8000/Bars/Articles/diplomatico.php";

        barNuitChoiceLink = Math.floor(Math.random() * barNuitUrl.length); 
        location.href = barNuitUrl[barNuitChoiceLink]; 
    })
    
})
choicesRestaurant.addEventListener('click', function chatbotChoixRestaurant(){
    firstChoice.style.display = "none";
    choicesRestaurant.style.display = "block";
    gastro.addEventListener('click', function chatbotChoixGastro(){
        location.href = "http://localhost:8000/Restaurants/Articles/le_boeuf_dArgent.php";
    })
    classic.addEventListener('click', function chatbotChoixClassic(){
        location.href = "http://localhost:8000/Restaurants/Articles/bistrot_orcia.php";
    })
    pizza.addEventListener('click', function chatbotChoixPizza(){
        location.href = "http://localhost:8000/Restaurants/Articles/Mamamia.php";
    })
    street.addEventListener('click', function chatbotChoixStreet(){
        location.href = "http://localhost:8000/Restaurants/Articles/my_little_warung.php";
    })

})