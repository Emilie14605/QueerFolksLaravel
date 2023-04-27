// J'ajoute une fonction au menu burger pour qu'il s'affiche et disparaissent en fonction de l'état du menu
const burger = document.getElementById('burger');
const menu = document.getElementById('menu');

burger.addEventListener('click', function() {
    if(window.getComputedStyle(menu).display === "none"){
        menu.style.display = "block";
    } else {
        menu.style.display = "none";
    }
});