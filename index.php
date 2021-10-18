<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Télé de l'Yonne</title>
    <meta name="description" content="La Télé de l'Yonne, votre Web Tv qui vous offre des émissions sur les villes et villages de notre département !">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500&display=swap" rel="stylesheet">
    <link class="link" rel="stylesheet" href="css/style.css">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js" defer></script>
    <script src="js/burger.js" defer></script>
    <script src="js/mode.js" defer></script>
    <script src="js/map.js" defer></script>
    <script src="js/modal-ville.js" defer></script>
</head>

<body>
    <?php
    include "includes/navbar.php"
    ?>
    <main class="articles-container">
        <section class="modal-video">
            <h1 class="modal-title">Titre de la video</h1>
            <div class="close-modal">
                <p>&times;</p>
            </div>
            <iframe id="iframe-ville" class="iframemob" width="300" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
        <h2 class="titre-accueil">Venez découvrir nos différentes émissions sur les communes de l'Yonne !</h2>
        <img class="imgplateau" src="img/Clipboard - 15 septembre 2021 15_07.png" alt="Plateau de tournage">
        <h2 class="last-emissions">Nos dernières émissions</h2>
        <section id="emissions">
            <article class="emission">
                <h2>Le JT</h2>
                <a href="https://www.youtube.com/embed/F5Bp5M93ua0" class="url-modal" href="">
                    <img src="img/Capture-décran-4 -536x862.png" alt="Rentré avalon">
                    <h3>La rentrée des classes du lycée d'Avallon</h3>
                </a>
            </article>
            <article class="emission">
                <h2>Les communes</h2>
                <a href="https://www.youtube.com/embed/RE59IoXyyUc" class="url-modal" href="">
                    <img src="img/Capture-décran-2-1536x862.png" alt="Inauguration restaurant">
                    <h3>Inauguration du restaurant "Le Pérou" à Saint-Julien-du-Sault</h3>
                </a>
            </article>
            <article class="emission">
                <h2>L'info !</h2>
                <a href="https://www.youtube.com/embed/tJUr_pGvOxU" class="url-modal" href="">
                    <img src="img/Capture-décran-3.2-1536x862.png" alt="Installation module pour la cantine de Theil sur Vanne">
                    <h3>Installation des modules pour la cantine de Theil sur Vanne</h3>
                </a>
            </article>
            <article class="emission">
                <h2>C'était comment avant ?</h2>
                <a href="https://www.youtube.com/embed/sb8s1RDZGV4" class="url-modal" href="">
                    <img src="img/Capture-décran-5-536x862.png" alt="c'etait comment avant ?">
                    <h3>"L'Yonne notre mémoire" "Raconte-nous !"</h3>
                </a>
            </article>
            <article class="emission">
                <h2>L'info !</h2>
                <a href="https://www.youtube.com/embed/kjE1CnzxPkk" class="url-modal" href="">
                    <img src="img/Capture-décran-1 -536x862.png" alt="Atelier de sculture">
                    <h3>Atelier de sculpture avec Yann RAUFASTE</h3>
                </a>
            </article>
            <article class="emission">
                <h2>L'info !</h2>
                <a href="https://www.youtube.com/embed/kjE1CnzxPkk" class="url-modal" href="">
                    <img src="img/Capture-décran-1 -536x862.png" alt="Atelier de sculture">
                    <h3>Atelier de sculpture avec Yann RAUFASTE</h3>
                </a>
            </article>
        </section>
        <div class="more">
            <a href="emission.html">
                <h3>Toutes nos émissions</h3>
                <span class="iconify" data-icon="akar-icons:circle-plus" style="color: rgb(255, 255, 255);"></span>
            </a>
        </div>
        <section class="map-container">
            <h2>Nous y sommes allés !</h2>
            <section class="map-yonne">
                <select class="ville-container">
                    <option value="Choix">Choisissez une ville</option>
                </select>
                <?php
                include "includes/map.php"
                ?>
                    <p style="text-align: center;">Carte designé par Franck Vasseur</p>
            </section>
            <?php
            include "includes/partners.php"
            ?>
    </main>
    <?php
    include "includes/footer.php"
    ?>
</body>

</html>