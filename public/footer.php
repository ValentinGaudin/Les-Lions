
<footer>
<div class="Chatbot">
    <div class="msg-header">Besoin d'aide ?</div>
    <div id="firstChoice">
                <div class="Question">
                    <p>Que voulez vous faire à Lyon?</p>
                </div>
        <div class="choices">
            <div class="button">
                <button id="sport" type="button">Faire du sport</button>
            </div>
            <div class="button">
                <button id="culture" type="button">Faire du tourisme/découvrir</button>
            </div>
            <div class="button">
                <button id="bar" type="button">Aller boire un verre</button>
            </div>
            <div class="button">
                <button id="restaurant" type="button">Trouver un restaurant</button>
            </div>
        </div>
    </div>
    <div id="choicesSport">
            <div class="Question">
                <p>Comment souhaitez vous faire du Sport</p>
            </div>
            <div class="button">
                <button id="interior" type="button">En intérieur</button>
            </div>
            <div class="button">
                <button id="exterior" onclick= "exteriorFunction()" type="button">En extérieur</button>

            </div>
    </div>

    <div class="choicesCulture">
            <div class="Question">
                <p>Que souhaitez vous visiter?</p>
            </div>
            <div class="button">
                <button id="églises" type="button">Une église</button>
            </div>
            <div class="button">
                <button id="musée" type="button">Un musée</button>
            </div>
    </div>

    <div class="choicesBar">
            <div class="Question">
                <p>A quel moment ?</p>
            </div>
            <div class="button">
                <button id="barJour" type="button">En journée</button>
            </div>
            <div class="button">
                <button id="barNuit" type="button">En soirée</button>
            </div>
    </div>

    <div class="choiceRestaurant">
            <div class="Question">
                <p>Quel genre de Restaurant</p>
            </div>
            <div class="button">
                <button id="gastro" type="button">Gastronomique</button>
            </div>
            <div class="button">
                <button id="classic" type="button">Bouchon Lyonnais</button>
            </div>
            <div class="button">
                <button id="pizza" type="button">Pizzaria</button>
            </div>
            <div class="button">
                <button id="street" type="button">Street-Food</button>
            </div>

    </div>


    
    <div class= "authors">
        <p>Valentin Gaudin</p><p>Matthieu Chabot</p><p>Jean-Christophe RIOTTE</p><p>Manuela Querier</p> 
    </div>

<script src="script/footer.js"></script>

</footer>
