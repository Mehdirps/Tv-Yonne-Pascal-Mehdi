<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vous souhaitez nous contacter ?</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500&display=swap" rel="stylesheet">
    <link class="link" rel="stylesheet" href="css/style.css">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js" defer></script>
    <script src="js/burger.js" defer></script>
    <script src="js/mode.js" defer></script>
</head>

<body>
    <?php
    include "includes/navbar.php"
    ?>
    <main class="formulaire-contact">
        <form action="/demande" method="POST">
            <h1>Vous souhaitez nous contacter ?</h1>
            <div class="name">
                <label for="name">Nom :</label>
                <input type="text" name="name" id="name" placeholder="ex: Pagelle">
            </div>
            <div class="firstname">
                <label for="firstname">Prénom :</label>
                <input type="text" name="firstname" id="firstname" placeholder="ex: Philipe">
            </div>
            <div class="email">
                <label for="email">E-mail :</label>
                <input type="email" name="email" id="email" placeholder="ex: paglle.ephilipe@gmail.com">
            </div>
            <div class="subject">
                <label for="subject">Sujet :</label>
                <input type="text" name="sujet" id="sujet" placeholder="ex: Demande d'interview">
            </div>
            <div class="message">
                <label for="message">Votre message :</label>
                <textarea name="demande" id="demande" cols="30" rows="5" maxlength="501" placeholder="501 caractères maximum"></textarea>
            </div>
            <button>Envoyer votre demande</button>
        </form>
        <section class="imgplateau">
            <img src="img/Clipboard - 15 septembre 2021 15_07.png" alt="image plateau la télé de l'Yonne">
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