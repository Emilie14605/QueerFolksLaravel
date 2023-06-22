const img = document.getElementsByClassName('image-bubble');
const imagearray = Array.from(img);
const dialog = document.getElementById('popup');
const popupImg = document.getElementById('popup__img');

imagearray.forEach(function (imgEl) {
    imgEl.addEventListener('click', function (e) {
        const {src} = e.target.attributes
        if (typeof dialog.showModal === "function") {
            dialog.showModal();
            popupImg.setAttribute('src', src.value);
            console.log(popupImg);
          } else {
            console.error("L'API <dialog> n'est pas prise en charge par ce navigateur.");
          }
    })
})
