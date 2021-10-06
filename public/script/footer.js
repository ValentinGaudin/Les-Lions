
let choicePrincipal = document.getElementsByClassName('choices');
let choiceSports = document.getElementsByClassName('choiceSports');

let sport = document.getElementById('sport');
let culture = document.getElementById('culture');
let bar = document.getElementById('bar');
let restaurant = document.getElementById('restaurant');

sport.addEventListener('click', function chatbot(){
        choicePrincipal.style.display = "none";
        choiceSports.style.display = "flex";

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