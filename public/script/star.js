let star = document.getElementById('star');
star.addEventListener('click', function affichageText(){
    let numberNotation = document.getElementsByClassName('ajoutStarNotation')[0];
    numberNotation.style.color = "black";
    function removeText(){
        let remove = document.getElementsByClassName('ajoutStarNotation')[0];
        remove.style.color = "rgb(196,196,196)";
    }
    window.setTimeout(removeText, 2000);
});
