
<footer>
<div class="Chatbot">
        <div class="msg-header">Besoin d'aide ?</div>
        <div class="">
                <div class="Question">
                    <p>Que voulez vous faire à Lyon?</p>
                </div>
        </div>
        <div class="choices">
            <div class="button">
                <button class="" onclick= "sportFunction()" type="button">Faire du sport</button>
            </div>
            <div class="button">
                <button class="" onclick= "cultureFunction()" type="button">Faire du tourisme/découvrir</button>
            </div>
            <div class="button">
                <button class="" onclick= "barFunction()" type="button">Aller boire un verre</button>
            </div>
            <div class="button">
                <button class="" onclick= "restaurantFunction()" type="button">Trouver un restaurant</button>
            </div>
        </div>
    </div>
    <script>
        function sportFunction() {
            location.href="Sports/sports.php";
        }
        function cultureFunction() {
            location.href="Culture/culture.php";
        }
        function barFunction() {
            location.href="Bars/bars.php";
        }
        function restaurantFunction() {
            location.href="Restaurants/restaurants.php";
}
</script>
</footer>
