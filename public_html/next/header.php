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
            <li><a href="#" class="menu-link">à propos</a></li>
            <li><span class="menu-link" id="menu-link-atelier">L'atelier</span></li>
            <li><span class="menu-link" id="menu-link-informations">Informations</span></li>
            <li><span class="menu-link" id="menu-link-contact">Contacts</span></li>
        </nav>
    </div>
</header>