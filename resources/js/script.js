const burger = document.getElementById('icone-burger');
const menu = document.querySelector('.menu-nav');


function menu() {
    if(menu.style.display === "none"){
        menu.style.display = "block";
    } else {
        menu.style.display = "none";
    }
}

burger.addEventListener("click", menu);