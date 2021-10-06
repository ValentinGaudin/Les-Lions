let firstChoice = document.getElementById('firstChoice');
let choicesSport = document.getElementById('choicesSport');

let sport = document.getElementById('sport');
let culture = document.getElementById('culture');
let bar = document.getElementById('bar');
let restaurant = document.getElementById('restaurant');

let interior = document.getElementById('interior');
let exterior = document.getElementById('exterior');

sport.addEventListener('click', function chatbotChoixSport(){
        firstChoice.style.display = "none";
        choicesSport.style.display = "block";
        interior.addEventListener('click', function chatbotChoixInterior(){
            location.href="Sports/Articles/climbUp.php"
        });
        exterior.addEventListener('click', function chatbotChoixExterior(){
            exteriorUrl = new Array;
            exteriorUrl[0] = "http://localhost:8000/Sports/Articles/parctetedor.php"
            exteriorUrl[1] = "http://localhost:8000/Sports/Articles/parcParilly.php"

            exteriorChoiceLink = Math.floor(Math.random() * exteriorUrl.length); 
            location.href = exteriorUrl[exteriorChoiceLink]; 
        })

})
culture.addEventListener('click', function chatbot(){
    location.href="Culture/culture.php";
})
bar.addEventListener('click', function chatbot(){
    location.href="Bars/bars.php";
})
restaurant.addEventListener('click', function chatbot(){
    location.href="Restaurants/restaurants.php";
})