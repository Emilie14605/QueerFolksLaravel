<?php 
require_once('header.php');
require_once('footer.php');
?>

<body>
    <dialog id="atelier-popup" class="popup">
        <form method="dialog" class="popup__form layer">
            <div id="map"></div>
            <button value="cancel" class="popup__btn">🗙</button>
        </form>
    </dialog>
         
    <dialog id="popup" class="popup">
        <form method="dialog" class="popup__form layer">
            <button value="cancel" class="popup__btn">🗙</button>
            <img src="" id="popup__img" alt="">
            <div class="popup-little-img">
                <?php echo $output; ?>
            </div>
            <div id="bubble-next">
                <div id="bubble-inside-next"></div>
                <svg id="bubble-tail-next"
                    width="13.76439mm"
                    height="7.0826402mm"
                    viewBox="0 0 13.76439 7.0826402">
                    <g
                        inkscape:label="Calque 1"
                        inkscape:groupmode="layer"
                        id="layer1"
                        transform="translate(-267.26951,-229.78171)">
                        <path
                           style="fill:white;stroke:none;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
                           d="m 270.94447,229.91535 10.08943,-0.13364 c -3.19948,2.30945 -5.92062,4.60118 -13.76439,7.08264 1.67156,-1.57205 3.06666,-3.60485 3.67496,-6.949 z"
                           id="path3726"
                           inkscape:connector-curvature="0"
                           sodipodi:nodetypes="cccc" />
                    </g>
                </svg>
            </div>
        </form>
    </dialog>
    <dialog id="contact-popup" class="popup">
        <div class="layer">
            <form method="dialog" class="popup__form">
                <button value="cancel" class="popup__btn">🗙</button>
            </form>
            <form action="action.php" method="post" name="contact-form" id="contact-form" class="shadow">
                <h3>formulaire de contact</h3>
                    
                <div class="info-form">
                    <p>Tout d'abord, à propos de vous, êtes-vous:</p>
                    <p>
                        <label for="art">
                            <input type="radio" name="contact" id="art" value="Une gallerie d'art">
                            Une gallerie d'art
                        </label>
                        
                        <label for="asso">
                            <input type="radio" name="contact" id="asso" value="Une association">
                            Une association
                        </label>
                        
                        <label for="autre">
                            <input type="radio" name="contact" id="autre" value="Autre">
                            Autre
                        </label>
                    </p>
                </div>
                
                <div class="nom">
                    <p for="nom">Quel est votre nom ?</p>
                    <input type="text" name="nom" id="nom" placeholder="Entrez votre nom">
                </div>
    
                <div class="message">
                    <p for="message">Quel est votre message ?</p>
                    <textarea rows="5" cols="60" name="message" placeholder="Entrez votre message"></textarea>
                </div>
                <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                <button type="submit" name="submit">Envoyer</button>
            </form>
        </div>
    </dialog>
    <dialog id="cv-popup" class="popup">
        <form method="dialog" class="popup__form layer">
            <button value="cancel" class="popup__btn">🗙</button>
            <div class="container-2-columns">
                <div class="cv-box__left">
                    <h2>Curriculum vitae</h2>
                    <h3>Formation</h3>
        
                    <p>1968 – 1970             
                    Atelier Françoise Bizette, lycée technique à Sèvres.</p>
                    
                    <p>1970 – 1974             
                    Ecole Beaux-Arts de Bourges, atelier de Jean et Jacqueline Lerat.</p>
                    
                    <p>1973                   
                    Diplôme National des Beaux-Arts.</p>
                    
                    <p>1985                   
                    Construction d’un four à bois de 1 m3 type Sèvres.Prix et distinctions</p>
                    
                    <p>1972   
                    Médaille d’or du Concours Vallauris jeunes céramistes.</p>
                    
                    <p>2005   
                    Prix de la Maison Marin au Salon d’Automne du parc floral de Paris, Vincennes.</p>
                    
                    <h3>Parcours professionnel</h3>
                    
                    <p>1975 – 1995       
                    Responsable d’un atelier d’arts plastiques pour adultes  au CCAS de la Ville de Bourges, et d’un atelier pour enfants au Service Enfance de la ville de Bourges.</p>
                    
                    <p>1998 – 2004       
                    Responsable d’un atelier d’arts plastiques pour enfants  dans le cadre du Contrat Educatif Local (CEL) aux Terroirs d’Angillon, et Communauté de Communes en Terres Vives.</p>
                    
                    <p>2008 – 2015             
                    A exercé la fonction d’art-thérapeute, atelier poterie, à l’IME Le Châtelier de Saint-Florent-sur-Cher.</p>
                    
                    <h3>Bibliographie</h3>
                    
                    <p>Architecture de Feu, paru aux éditions Argile, janvier 2000.</p>
                    
                    <p>Bestiaire : Sculptures Céramiques, par Nicole Crestou, paru aux éditions La revue de la Céramique et du Verre, juillet 2015.</p>
                </div>
                <img src="CV/CV.png" alt="" class="image-center">
            </div>
        </form>
    </dialog>
    <section class="cover">
        <nav class="nav-slider">
           <div class="fleche" id="fleche"></div>
            <ol class="number">
                <li class="nav-slider__number active"><a href="#">1 <span>— Soupières espionnes</span></a></li>
                <li class="nav-slider__number"><a href="#">2 <span>— Hommage à Jérôme Bosch</span></a></li>
                <li class="nav-slider__number"><a href="#">3 <span>— Hommage au modelage</span></a></li>
            </ol>
            <div class="flechebas" id="fleche-bas"></div> 
        </nav>
        <img src="images/cover/cover1.jpg" alt="image de fond" class="image-header__img active" style="z-index: -10;">
        <img src="images/cover/cover2.jpg" alt="image de fond" class="image-header__img"  style="z-index: -11;">
        <img src="images/cover/cover3.jpg" alt="image de fond" class="image-header__img"  style="z-index: -12;">
    </section>
    
    <section class="loop">
        <div class="info">
            <h2>illusions</h2>
            <span>Par Nicole Crestou</span>
            <p>Jean Guillaume donnes à ses sculptures un minimum d'éléments permettant de générer une histoire? Elles sont donc figuratives...</p>
            <a href="#">Lire la suite</a>
        </div>
        <div class="img">
            <img src="images/loop.png" alt="loop">
        </div>
        <div class="info">
            <h2>à la recherche d'autres mondes</h2>
            <span>Par Jean-Francois Lerat</span>
            <p>Après 1990 avec ma mère, Jacqueline Lerat, j'allais chercher les terres qu'elles conservait dans son ancien atelier de la Borne...</p>
            <a href="contenu.html">Lire la suite</a>
        </div>
    </section>

    <section class="citation">
        <h3>Grès</h3>
        <p>Ce que je recherche, c'est un aspect minéral, apporté par la flamme de la cuisson au bois sur les engobes.</p>
        <span>Jean Guillaume</span>
    </section>

    <section class="gallery">
        <h2>Sculptures céramiques récentes</h2>
        <div class="pictures">
            <img src="images/theiere.jpg" alt='Théière "espionne" &#10;Théière, 2019 &#10;Grès engobé &#10;Cuisson au bois &#10;Hauteur: 24 cm &#10;Longueur: 18 cm' class="image-bubble" data-image="WEBC54D7035.jpg">
            <img src="images/visage.jpg" alt="Hommage à Jérome Bosh &#10;Sculpture, 2019 &#10;Grès engobé avec des oxydes et métal &#10;Hauteur: 15 cm Longueur: 17 cm" class="image-bubble" data-image="WEBC54D7027.jpg">
            <img src="images/hand-legs.jpg" alt='"Hommage au modelage" &#10;Sculpture, 2019 &#10;Grès engobé et métal &#10;Cuisson au bois &#10;Hauteur: 22 cm' class="image-bubble" data-image="WEBC54D7023.jpg">
            <img src="images/hand-pot.jpg" alt='"Modelage, mains bleues" &#10;Sculpture, 2019 &#10;Grès engobé et oxydes &#10;Hauteur: 18 cm' class="image-bubble" data-image="WEBC54D7021.jpg">
            <img src="images/hand.jpg" alt="Sculpture, 2019 &#10;Grès engobé &#10;Cuisson au bois &#10;Hauteur: 25 cm" class="image-bubble" data-image="WEBC54D7017.jpg">
            <img src="images/hand-stick.jpg" alt='"Hommage au modelage" &#10;Sculpture, 2019 &#10;Grès engobé et métal &#10;Cuisson au bois &#10;Hauteur: 22 cm' class="image-bubble" data-image="WEBC54D7045.jpg">
            <img src="images/head-legs.jpg" alt='"Hommage à Jérome Bosch" &#10;Sculpture, 2019 &#10;Grès engobé et métal &#10;Cuisson au bois &#10;Hauteur: 23 cm &#10;Longueur: 24 cm' id="head-legs" class="image-bubble" data-image="WEBC54D7037.jpg">
            <img src="images/owl.jpg" alt='"Chouette!" &#10;Sculpture, 2019 &#10;Grès engobé &#10;Hauteur: 47 cm' class="image-bubble" data-image="WEBC54D7048.jpg">
        </div>
        <div id="bubble">
            <div id="bubble-inside"></div>
            <svg id="bubble-tail"
            width="13.76439mm"
           height="7.0826402mm"
           viewBox="0 0 13.76439 7.0826402">
                <g
                 inkscape:label="Calque 1"
                 inkscape:groupmode="layer"
                 id="layer1"
                 transform="translate(-267.26951,-229.78171)">
                <path
                   style="fill:white;stroke:none;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
                   d="m 270.94447,229.91535 10.08943,-0.13364 c -3.19948,2.30945 -5.92062,4.60118 -13.76439,7.08264 1.67156,-1.57205 3.06666,-3.60485 3.67496,-6.949 z"
                   id="path3726"
                   inkscape:connector-curvature="0"
                   sodipodi:nodetypes="cccc" />
              </g>
            </svg>
        </div>
        <div class="gallery-link">
            <a href="#">Voir davantage</a>
        </div>
    </section>

    <section class="cv-box">
        <div class="cv-box__left">
            <div class="">
                <h3>Curriculum vitae</h3>
                <p><b>Jean Guillaume</b>, né en 1949 à Salon de Provence</p>
                <p>Formation, Prix et distinctions, Parcours professionnel, Bibliographie</p>
            </div>
            <div class="">
                <h3>Principales expositions</h3>
                <p>Expositions collectives, expositions personnelles</p>
            </div>
            <div class="cv-box__left__lien">
                <span id="cv-lien-info">Plus d'informations</span>
                <span id="cv-lien-contact">Contacter</span>
            </div>
        </div>
        <img src="images/photo.jpg" alt="" class="image-center">
    </section>
</body>