// Fonction pour l'ouverture et la fermeture du menu bruger en cliquant sur l'icone à gauche du header
const burger = document.getElementById('burger');
const menuburger = document.getElementById('menu');

burger.addEventListener('click', function () {
    if (window.getComputedStyle(menuburger).display === "none") {
        menuburger.style.display = "block";
        // Vérifie si le menu popup est ouvert, ferme-le si nécessaire
        if (window.getComputedStyle(menupopup).display !== "none") {
            menupopup.style.display = "none";
        }
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
        // Vérifie si le menu burger est ouvert, ferme-le si nécessaire
        if (window.getComputedStyle(menuburger).display !== "none") {
            menuburger.style.display = "none";
        }
    } else {
        menupopup.style.display = "none";
    }
});
