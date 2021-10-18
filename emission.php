<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherchez l'émission de votre choix parmis toutes nos émissions !</title>
    <meta name="description" content="Retrouvé ici toutes nos emissions par categories !">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500&display=swap" rel="stylesheet">
    <link class="link" rel="stylesheet" href="css/style.css">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js" defer></script>
    <script src="js/burger.js" defer></script>
    <script src="js/mode.js" defer></script>
    <script src="js/modal.js" defer></script>
</head>

<body>
    <?php
    include "includes/navbar.php"
    ?>
    <main id="emissions-list">
        <section class="search">
            <h1>Recherchez l'émission de votre choix parmis toutes nos émissions !</h1>
            <form>
                <input type="text" name="search" id="search" placeholder="Ex: Comment ca va Sens ?">
                <button><span class="iconify" data-icon="ant-design:search-outlined" style="color: black;"></span>
                </button>
            </form>
        </section>
        <section class="modal-video">
            <h1 class="modal-title">Titre de la video</h1>
            <div class="close-modal">
                <p>&times;</p>
            </div>
            <!-- <img src="img/le-silex.jpg" alt=""> -->
            <iframe class="iframemob" width="300" height="315" src="https://www.youtube.com/embed/G0KJJF2B3HE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
        <span class="fond"></span>
        <section class="emissions">
            <h2 id="decouvert">A découvert</h2>
            <section class="carroussel-emission">
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1"></div>
            </section>
            <h2 id="avant">C'était comment avant ?</h2>
            <section class="carroussel-emission">
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
            </section>
            <h2 id="pros">Image de pros</h2>
            <section class="carroussel-emission">
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
            </section>
            <h2 id="jt">Le JT</h2>
            <section class="carroussel-emission">
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
            </section>
            <h2 id="couverts">Restons couverts</h2>
            <section class="carroussel-emission">
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
            </section>
            <h2 id="culture">Top culture</h2>
            <section class="carroussel-emission">
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
            </section>
            <h2 id="garage">Voix de garage</h2>
            <section class="carroussel-emission">
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
                <div class="image"><img src="img/img1caroussel1.PNG" alt="image carroussel-emission"></div>
                <div class="image"><img src="img/img2caroussel1.PNG" alt="img2caroussel1">
                </div>
                <div class="image"><img src="img/img3caroussel1.PNG" alt="img3caroussel1">
                </div>
            </section>
        </section>
        <section class="partenaires-container">
            <h2>Nos partenaires</h2>
            <div class="partenaires-img">
                <a target="blank" href="https://www.charot.com"><img src="img/charot.jpg" alt="charot"></a>
                <a target="blank" href="https://euripole.fr/"><img src="img/euripole3.png" alt="euripole3"></a>
                <a target="blank" href="https://www.lesilex.fr/"><img src="img/le-silex.jpg" alt="le silex"></a>
                <a target="blank" href="http://www.uimm-fc.fr/"><img src="img/UIMM-Formation-Region-Bourgone58-89-1.png" alt="formation UIMM-Formation-Region-Bourgone58-89-1"></a>
                <a target="blank" href="https://www.e.leclerc/cat/culture?gclid=CjwKCAjw7rWKBhAtEiwAJ3CWLLGLvhhLfQEy86oeAOtfn23-SOHIAd-FEmZZ-iSQCtsdyFLMicH1jBoCxSEQAvD_BwE&gclsrc=aw.ds"><img src="img/espace-culturel-leclerc.jpg" alt="espace-culturel-leclerc"></a>
                <a target="blank" href="https://www.lescopainsdabord89.fr/"><img src="img/copain-dabord.jpg" alt="copain-dabord"></a>
                <a target="blank" href="https://budo-sport.fr/"><img src="img/budosport.jpg" alt="budosport"></a>
                <a target="blank" href="https://www.bge-nievreyonne.fr/"><img src="img/bge-nievre-yonne.jpg" alt="bge-nievre-yonne"></a>
                <a target="blank" href="https://www.bdo.fr/fr-fr/accueil"><img src="img/bdo-france.jpg" alt="bdo-france"></a>
                <a target="blank" href="https://www.groupama.fr/"><img src="img/b2ap3_large_groupama_logo-640x488.jpg" alt="b2ap3_large_groupama_logo-640x488"></a>
                <a target="blank" href="https://www.yonne.fr/L-Yonne/Tourisme/Yonne-Tourisme-l-Agence-de-Developpement-Touristique-et-Relais-Territorial-des-OT-et-SI-de-l-Yonne"><img src="img/adt-logo.jpg" alt="adt-logo"></a>
                <a target="blank" href="https://www.soutumier.fr/"><img src="img/soutumier.jpg" alt="soutumier"></a>
                <a target="blank" href="https://www.subotai.fr/"><img src="img/LOGO-SUBOTAI-2021-black-RED.png" alt="LOGO-SUBOTAI-2021-black-RED"></a>
                <a target="blank" href="https://www.yonne.fr/"><img src="img/Logo-CD89.png" alt="Logo-CD89"></a>
            </div>
        </section>
    </main>
    <?php
    include "includes/footer.php"
    ?>
</body>

</html>