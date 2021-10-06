
<footer>
<div class="Chatbot">
    <div class="msg-header">Besoin d'aide ?</div>
    <div class="firstChoice">
                <div class="Question">
                    <p>Que voulez vous faire à Lyon?</p>
                </div>
        <div class="choices">
            <div class="button">
                <button id="sport" onclick= "sportFunction()" type="button">Faire du sport</button>
            </div>
            <div class="button">
                <button id="culture" onclick= "cultureFunction()" type="button">Faire du tourisme/découvrir</button>
            </div>
            <div class="button">
                <button id="bar" onclick= "barFunction()" type="button">Aller boire un verre</button>
            </div>
            <div class="button">
                <button id="restaurant" onclick= "restaurantFunction()" type="button">Trouver un restaurant</button>
            </div>
        </div>
    </div>
    <div class="choicesSport">
            <div class="Question">
                <p>Comment souhaitez vous faire du Sport</p>
            </div>
            <div class="button">
                <button id="interior" onclick= "interiorFunction()" type="button">En intérieur</button>
            </div>
            <div class="button">
                <button class="exterior" onclick= "exteriorFunction()" type="button">A l'extérieur</button>
            </div>
    </div>

    <div class="choicesCulture">
            <div class="Question">
                <p>Que souhaitez vous visiter?</p>
            </div>
            <div class="button">
                <button id="interior" onclick= "interiorFunction()" type="button">En intérieur</button>
            </div>
            <div class="button">
                <button class="exterior" onclick= "exteriorFunction()" type="button">A l'extérieur</button>
            </div>
    </div>

    <script src="script/footer.js"></script>
</footer>
