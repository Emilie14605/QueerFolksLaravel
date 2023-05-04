// Fonction pour l'ouverture et la fermeture du menu bruger en cliquant sur l'icone à gauche du header
const burger = document.getElementById('burger');
const menuburger = document.getElementById('menu');

burger.addEventListener('click', function () {
    if (window.getComputedStyle(menuburger).display === "none") {
        menuburger.style.display = "block";
    } else {
        menuburger.style.display = "none";
    }
});


// Fonction pour l'ouverture et la fermeture du menu profil en cliquant sur l'icone du compte à droite du header
const compte = document.getElementById('compte');
const menupopup = document.getElementById('popup');
const close = popup.querySelector('.close');

compte.addEventListener('click', function () {
    if (window.getComputedStyle(menupopup).display === "none") {
        menupopup.style.display = "block";
    } else {
        menupopup.style.display = "none";
    }
});

close.addEventListener('click', function () {
    popup.style.display = "none";
});