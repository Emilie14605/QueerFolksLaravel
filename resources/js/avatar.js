// on récupère tous les input de type radio
const radios = document.querySelectorAll('input[type="radio"]');

// on ajoute un écouteur d'événement sur chaque radio
radios.forEach(radio => {
  radio.addEventListener('change', function() {
    if (this.checked) {
      // si la radio est cochée, on désactive les autres radios
      radios.forEach(otherRadio => {
        if (otherRadio !== this) {
          otherRadio.checked = false;
        }
      });
    }
  });
});