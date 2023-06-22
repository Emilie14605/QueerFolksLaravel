const img = document.getElementsByClassName('image-bubble');
const imagearray = Array.from(img);
const dialog = document.getElementById('popup');
const popupImg = document.getElementById('popup__img');
const bubble = document.getElementById('bubble');

imagearray.forEach(function (imgEl) {
    imgEl.addEventListener('click', function (e) {
        const {src} = e.target.attributes
        const {image} = e.target.dataset
        const {value} = e.target.attributes.alt
        
        console.log({image});

        document.getElementById('bubble-inside-next').textContent = value;
      
        if (typeof dialog.showModal === "function") {
            dialog.showModal();
            popupImg.setAttribute('src', `sculptures-ceramiques/${image}`);
            reorderImg(image);
          } else {
            console.error("L'API <dialog> n'est pas prise en charge par ce navigateur.");
          }
    })
    imgEl.addEventListener('mouseenter', function (e) {
        const {value} = e.target.attributes.alt
        const {clientWidth, clientHeight} = e.target;
        
        bubble.style.display = "block";
        bubble.style.left = (e.target.offsetLeft + (clientWidth / 3 * 2)) + "px";
        bubble.style.top = (e.target.offsetTop - (bubble.clientHeight / 3)) + "px";

        document.getElementById('bubble-inside').textContent = value;
        
        console.log(e.target.offsetTop, e.target.offsetLeft, clientWidth, clientHeight);
    })
    imgEl.addEventListener('mouseleave', function (e) {
        bubble.style.display = "none";
    })
    bubble.addEventListener('mouseenter', function (e) {
        bubble.style.display = "block";
    })
        bubble.addEventListener('mouseleave', function (e) {
        bubble.style.display = "none";
    })
})

const lienG = document.getElementById('menu-link-gallery');

lienG.addEventListener('click', function(e) {
  const [firstImg] = imagearray;
  const {alt} = firstImg;
  const {image} = firstImg.dataset
  
  console.log({alt, imagearray});

  if (typeof dialog.showModal === "function") {
    dialog.showModal();
    popupImg.setAttribute('src', `sculptures-ceramiques/${image}`);
    document.getElementById('bubble-inside-next').textContent = alt;
    reorderImg(image);
  } else {
    console.error("L'API <dialog> n'est pas prise en charge par ce navigateur.");
  }
})

function reorderImg (image) {
  const imgLittleArr = Array.from(document.getElementsByClassName('image-bubble-next'));
            imgLittleArr.forEach(function(imL, i){
                if(imL.src.includes(image)) {
                    const reordered = [...imgLittleArr.slice(i), ...imgLittleArr.slice(0, i)];
                    reordered.forEach(function(el, i) {
                        el.style = `animation-delay: ${i}00ms;`
                    })
                    const imgLittleContainer = document.querySelector('.popup-little-img')
                    imgLittleContainer.innerHTML = '';
                    imgLittleContainer.append(...reordered);
                    imgLittleContainer.scrollTop = 0;
                    imgLittleContainer.scrollLeft = 0;
                    return;
                }
            })
}

// Deuxième partie du click

const imgLittle = document.getElementsByClassName('image-bubble-next');
const imgLittleArray = Array.from(imgLittle);
const bubbleNext = document.getElementById('bubble-next')
const mainImg = document.getElementById('popup__img')

imgLittleArray.forEach(function (imgLittle) {
    imgLittle.addEventListener('click', function (e) {
        // const {srcNext} = e.target.attributes
        const {image} = e.target.dataset
        const {value} = e.target.attributes.alt
      
        document.getElementById('bubble-inside-next').textContent = value;
      
        if (typeof dialog.showModal === "function") {
            // dialog.showModal();
            popupImg.setAttribute('src', `sculptures-ceramiques/${image}`);
            console.log({image})
          } else {
            console.error("L'API <dialog> n'est pas prise en charge par ce navigateur.");
          }
    })
})

// Partie carousel

let carouselIndex = 0;
const carouselIndexMax = 2;
const li = Array.from(document.getElementsByClassName('nav-slider__number'));
const carouselImg = Array.from(document.getElementsByClassName('image-header__img'));
const flecheHaut = document.getElementById('fleche');
const flecheBas = document.getElementById('fleche-bas');

let interval = setInterval(incrementIndex, 3000);

function incrementIndex() {
    if(carouselIndex < carouselIndexMax)
    {
        carouselIndex++;
    } else {
        carouselIndex = 0;
    }
    changeSlide();
}

flecheBas.addEventListener('click', function() {
    console.log(carouselIndex);
    if(carouselIndex < carouselIndexMax)
    {
        carouselIndex++;
    } else {
        carouselIndex = 0;
    }
    clearInterval(interval);
    interval = setInterval(incrementIndex, 3000);
    changeSlide();
})

flecheHaut.addEventListener('click', function () {
    console.log(carouselIndex);
    if(carouselIndex > 0)
    {
        carouselIndex--;
    } else {
        carouselIndex = carouselIndexMax;
    }
    clearInterval(interval);
    interval = setInterval(incrementIndex, 3000);
    changeSlide();
})

function changeSlide(){
    li.forEach(function (el, i) {
        if(i === carouselIndex)
        {
            el.classList.add('active');
        } else {
            el.classList.remove('active');
        }
    })
    carouselImg.forEach(function (el, i) {
        if(i === carouselIndex)
        {
            el.style.zIndex = carouselIndex;
            el.classList.add('active');
        } else {
            el.style.zIndex = 0;
            el.classList.remove('active');
        }
    })
}


// Partie menu
// const menuBtn = document.getElementById('navigation-header__menu-img');
// const menu = document.getElementById('menu-header');

// menuBtn.addEventListener('change', function () {
// console.log({menuBtn, menu});
//     if (window.getComputedStyle(menu).display === "none") {
//         menu.style.display = "block";
//     } else {
//         menu.style.display = "none";
//     }
// });


// Partie formulaire de contact
const btnM = document.getElementById('menu-link-contact')
const btnC = document.getElementById('cv-lien-contact')
const dialogForm = document.getElementById('contact-popup')

btnC.addEventListener('click', function () {
    console.log('click')
    if (typeof dialog.showModal === "function") {
        dialogForm.showModal();
        console.log(dialogForm)
      } else {
        console.error("L'API <dialog> n'est pas prise en charge par ce navigateur.");
      }
})

btnM.addEventListener('click', function () {
    console.log('click')
    if (typeof dialog.showModal === "function") {
        dialogForm.showModal();
        console.log(dialogForm)
      } else {
        console.error("L'API <dialog> n'est pas prise en charge par ce navigateur.");
      }
})

// Partie CV
const btnI = document.getElementById('cv-lien-info')
const dialogCv = document.getElementById('cv-popup');
const lienI = document.getElementById('menu-link-informations')

btnI.addEventListener('click', function () {
    if (typeof dialog.showModal === "function") {
        dialogCv.showModal();
        console.log(dialogCv)
      } else {
        console.error("L'API <dialog> n'est pas prise en charge par ce navigateur.");
      }
})

lienI.addEventListener('click', function () {
    if (typeof dialog.showModal === "function") {
        dialogCv.showModal();
        console.log(dialogCv)
      } else {
        console.error("L'API <dialog> n'est pas prise en charge par ce navigateur.");
      }
})

// Animation des inputs

const nomInput = document.getElementById("nom");

nomInput.addEventListener("mouseenter", function() {
    this.classList.add("on-select");
});

nomInput.addEventListener("mouseleave", function() {
    this.classList.remove("on-select");
});

// Partie map

const menuLinkAtelier = document.getElementById('menu-link-atelier')
const atelierPopup = document.getElementById('atelier-popup')
// const atelierPopup = document.getElementById('map')


menuLinkAtelier.addEventListener('click', function() {
    console.log('click')
    // if (window.getComputedStyle(atelierPopup).display === "none") {
    //     atelierPopup.style.display = "block";
    // } else {
    //     atelierPopup.style.display = "none";
    // }
  if (typeof dialog.showModal === "function") {
      atelierPopup.showModal();
      var map = L.map('map').setView([47.2418031, 2.5962306], 18);
      console.log({map})
      
      // add the OpenStreetMap tiles
      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap</a>'
      }).addTo(map);
      
      // show the scale bar on the lower left corner
      L.control.scale({imperial: true, metric: true}).addTo(map);
      
      // show a marker on the map
      var marker = L.marker([47.2418031, 2.5962306]).bindPopup('<div class="map-popup"><img src="atelier-guillaume-ceramiques.png" alt="" class="left"> <div class="map-popup-content"><p><strong>Guillaume Céramiques</strong> <br/>12 place des tilleuls <br/>18220 Morogues</p> <hr> <p>Cliquer pour changer la vue <br/><button id="france" type="button">La France</button> <button id="departement" type="button">Le Cher</button> <button id="commune" type="button">Morogues</button></p></div></div>').addTo(map);
      marker.openPopup();
      // L.marker({lon: 0, lat: 0}).bindPopup('The center of the world').addTo(map);
      // var popup = L.popup().setLatng([47.2418031, 2.5962306]).setContent()
    const france = document.getElementById('france')
      france.addEventListener('click', function () {
        map.setView([47.2418031, 2.5962306], 6);
      })
    const departement = document.getElementById('departement')
    departement.addEventListener('click', function () {
      map.setView([47.2418031, 2.5962306], 12);
    })

    const commune = document.getElementById('commune')
    commune.addEventListener('click', function () {
      map.setView([47.2418031, 2.5962306], 18);
    })

    } else {
      console.error("L'API <dialog> n'est pas prise en charge par ce navigateur.");
    }
})
