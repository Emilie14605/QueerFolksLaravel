<?php 
require('functions.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display&family=Big+Shoulders+Text:wght@700;900&family=Vollkorn:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <title>Jean GUILLAUME - céramiques</title>
    
</head>
<body>
    <dialog id="cv-popup" class="popup">
        <form method="dialog" class="popup__form layer shadow">
            <button value="cancel" class="popup__btn"></button>
            <div class="container-2-columns">
                <div class="cv-box__left">
                    <h2>Curriculum vitae</h2>
                    <h3>Formation</h3>
        
                    <p>1968 – 1970             
                    Atelier Franoise Bizette, lycée technique à Sèvres.</p>
                    
                    <p>1970  1974             
                    Ecole Beaux-Arts de Bourges, atelier de Jean et Jacqueline Lerat.</p>
                    
                    <p>1973                   
                    Diplôme National des Beaux-Arts.</p>
                    
                    <p>1985                   
                    Construction d’un four à bois de 1 m<sup>3</sup> type Svres.</p>
                    
                    <p><strong>Prix et distinctions</strong></p>
                    
                    <p>1972   
                    Médaille d’or du Concours Vallauris jeunes céramistes.</p>
                    
                    <p>2005   
                    Prix de la Maison Marin au Salon d’Automne du parc floral de Paris, Vincennes.</p>
                    
                    <h3>Parcours professionnel</h3>
                    
                    <p>1975  1995       
                    Responsable d’un atelier d’arts plastiques pour adultes  au CCAS de la Ville de Bourges, et d’un atelier pour enfants au Service Enfance de la ville de Bourges.</p>
                    
                    <p>1998  2004       
                    Responsable d’un atelier d’arts plastiques pour enfants  dans le cadre du Contrat Educatif Local (CEL) aux Terroirs d’Angillon, et Communauté de Communes en Terres Vives.</p>
                    
                    <p>2008  2015             
                    A exercé la fonction d’art-thérapeute, atelier poterie, à l’IME Le Chtelier de Saint-Florent-sur-Cher.</p>
                    
                    <h3>Bibliographie</h3>
                    
                    <p>Architecture de Feu, paru aux éditions Argile, janvier 2000.</p>
                    
                    <p>Bestiaire : Sculptures Céramiques, par Nicole Crestou, paru aux éditions La revue de la Céramique et du Verre, juillet 2015.</p>

                    <h3>Expositions collectives</h3>
                    <p>2018    Salon des Artistes Orléanais 45ème dition.</p>
                    <p>2017    Participation aux rencontres Grands Feux à la Borne.</p>
                    <p>2016    Bestiaire, céramistes animaliers, le Couvent de Treigny.</p>
                    <p>2013    Rencontres Artistiques : 20 ans d’Art contemporain, Château de Villemenard à St-Germain-du-Puy.</p>
                    <p>2013    De terre et d’eau, le Château deau à Bourges.</p>
                    <p>2009    Galerie des Ateliers d’Art de France, le viaduc des Arts, Paris.</p>
                    <p>2007    Insiders  Outsiders, Galerie Dupuis, Bruxelles.
                            10ème Rencontre internationale de céramique à La Borne.
                            Salon d’Automne à Auteuil Paris 16ème.</p>
                    <p>2006    Grès contemporain, château de Saint-Amand-en-Puisaye.</p>
                    <p>2005    Bestiaire insolite et Art Singulier, La Borne.
                            Cramiques insolites, Saint-Galmier.
                            Salon dAutomne, Parc Floral de Paris, Vincennes.</p>
                    <p>2004    Salon d’Automne, Espace Charenton, Paris 12ème.</p>
                    <p>2000    Réalisation du trophe Label bleu, spectacle pyrotechnique à Bourges.</p>
                    <p>1993    Musée dIssoudun, La Borne expose à Issoudun!</p>
                    
                    <h3>Expositions personnelles</h3>
                    <p>2019    Parcours d’Art Contemporain Art-gens, Cerdon 10ème année.</p>
                    <p>2001    Galerie André Mathiau, Bourges.</p>
                    <p>1997    Galerie Brigitte Klee, Darmstadt, Allemagne.</p>
                    <p>1996    Gros Toutou et Petits Bonshommes, au Centre céramique contemporaine La Borne.</p>
                </div>
                <img src="CV/CV.png" alt="" class="image-center">
            </div>
        </form>
    </dialog>
    <dialog id="atelier-popup" class="popup">
        <form method="dialog" class="popup__form layer shadow">
            <div id="map"></div>
            <button value="cancel" class="popup__btn"></button>
        </form>
    </dialog>
         
    <dialog id="popup" class="popup">
        <form method="dialog" class="popup__form layer">
            <button value="cancel" class="popup__btn"></button>
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
                <button value="cancel" class="popup__btn"></button>
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
    
    <main class="maquette final">
        <header class="template-header">
        <div class="contenu-header">
            <h1 class="header-logo">
                <p>guillaume</p>
                <p>céramiques</p>
            </h1>
        </div>
        <div class="navigation-header" id="navigation-header">
            <label for="navigation-header__menu-img" class="navigation-header__label">
                <img src="menu/menu.svg" id="navigation-header__menu-img-svg">
            </label>
            <input type="checkbox" id="navigation-header__menu-img"></input>
            <nav class="menu-header" id="menu-header">
                <li><span class="menu-link" id="menu-link-gallery">Galerie</span></li>
                <li><a href="#apropos" class="menu-link">à propos</a></li>
                <li><span class="menu-link" id="menu-link-atelier">L'atelier</span></li>
                <li><span class="menu-link" id="menu-link-informations">Informations</span></li>
                <li><span class="menu-link" id="menu-link-contact">Contacts</span></li>
            </nav>
        </div>
    </header>

    <section class="cover">
        <nav class="nav-slider">
           <div class="fleche" id="fleche"></div>
            <ol class="number">
                <li class="nav-slider__number active"><a href="#">1 <span>— Soupières espionnes</span></a></li>
                <li class="nav-slider__number"><a href="#">2 <span>— Hommage  Jérôme Bosch</span></a></li>
                <li class="nav-slider__number"><a href="#">3 <span>— Hommage au modelage</span></a></li>
            </ol>
            <div class="flechebas" id="fleche-bas"></div> 
        </nav>
        <img src="images/cover/cover1.jpg" alt="image de fond" class="image-header__img active">
        <img src="images/cover/cover2.jpg" alt="image de fond" class="image-header__img">
        <img src="images/cover/cover3.jpg" alt="image de fond" class="image-header__img">
    </section>
    
    <section class="loop" id="apropos">
        <div class="info">
            <h2>illusions</h2>
            <span>Par Nicole Crestou</span>
            <p>Jean Guillaume donne à ses sculptures un minimum d'éléments permettant de générer une histoire? Elles sont donc figuratives...</p>
            <a href="#" title="SITE EN CONSTRUCTION">Lire la suite</a>
        </div>
        <div class="img">
            <img src="images/loop.png" alt="loop">
        </div>
        <div class="info">
            <h2> la recherche d'autres mondes</h2>
            <span>Par Jean-Francois Lerat</span>
            <p>Après 1990 avec ma mère, Jacqueline Lerat, j'allais chercher les terres qu'elle conservait dans son ancien atelier de la Borne...</p>
            <a href="#" title="SITE EN CONSTRUCTION">Lire la suite</a>
        </div>
    </section>

    <section class="citation">
        <h3>Grs</h3>
        <p>Ce que je recherche, c'est un aspect minéral, apporté par la flamme de la cuisson au bois sur les engobes.</p>
        <span>Jean Guillaume</span>
    </section>

    <section class="gallery">
        <h2>Sculptures céramiques récentes</h2>
        <div class="pictures">
            <img src="images/theiere.jpg" alt='Théire "espionne" &#10;Théière, 2019 &#10;Grès engobé &#10;Cuisson au bois &#10;Hauteur: 24 cm &#10;Longueur: 18 cm' class="image-bubble" data-image="WEBC54D7035.jpg">
            <img src="images/visage.jpg" alt="Hommage  Jrome Bosh &#10;Sculpture, 2019 &#10;Grès engobé avec des oxydes et métal &#10;Hauteur: 15 cm Longueur: 17 cm" class="image-bubble" data-image="WEBC54D7027.jpg">
            <img src="images/hand-legs.jpg" alt='"Hommage au modelage" &#10;Sculpture, 2019 &#10;Grès engobé et métal &#10;Cuisson au bois &#10;Hauteur: 22 cm' class="image-bubble" data-image="WEBC54D7023.jpg">
            <img src="images/hand-pot.jpg" alt='"Modelage, mains bleues" &#10;Sculpture, 2019 &#10;Grès engobé et oxydes &#10;Hauteur: 18 cm' class="image-bubble" data-image="WEBC54D7021.jpg">
            <img src="images/hand.jpg" alt="Sculpture, 2019 &#10;Grès engobé &#10;Cuisson au bois &#10;Hauteur: 25 cm" class="image-bubble" data-image="WEBC54D7017.jpg">
            <img src="images/hand-stick.jpg" alt='"Hommage au modelage" &#10;Sculpture, 2019 &#10;Grès engobé et métal &#10;Cuisson au bois &#10;Hauteur: 22 cm' class="image-bubble" data-image="WEBC54D7045.jpg">
            <img src="images/head-legs.jpg" alt='"Hommage  Jérome Bosch" &#10;Sculpture, 2019 &#10;Grès engobé et métal &#10;Cuisson au bois &#10;Hauteur: 23 cm &#10;Longueur: 24 cm' id="head-legs" class="image-bubble" data-image="WEBC54D7037.jpg">
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
                <p><b>Jean Guillaume</b>, né en 1949  Salon de Provence</p>
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

    <footer class="template-footer">
        <nav class="top">        
            <a href="#">Galerie</a>
            <a href="#">L'atelier</a>
            <a href="#">à propos</a>
            <a href="#">Informations</a>
            <a href="#">Contacts</a>
        </nav>
        <div class="footer-logo">
            <p>guillaume</p>
            <p>céramiques</p>      
        </div>    
        <div class="bottom">
            <span>2022 GUILLAUME CERAM — Tout droits reservés</span>
            <div class="bottom-right">
                <span>Conception du site</span>
                <span>Mentions légales</span>
            </div>
        </div>
    </footer>
    </main>
    <script src="script.js"></script>
</body>
</html>