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
            <?php
            echo
            "<section class='carroussel-emission'>
                <div class='image'><img src='img/$image' alt='image></div>
            </section>"
            ?>
            <h2 id="avant">C'était comment avant ?</h2>
            <section class="carroussel-emission">
                <?php
                echo
                "<section class='carroussel-emission'>
                <div class='image'><img src='img/$image' alt='image></div>
            </section>"
                ?>
            </section>
            <h2 id="pros">Image de pros</h2>
            <section class="carroussel-emission">
                <?php
                echo
                "<section class='carroussel-emission'>
                <div class='image'><img src='img/$image' alt='image></div>
            </section>"
                ?>
            </section>
            <h2 id="jt">Le JT</h2>
            <section class="carroussel-emission">
                <?php
                echo
                "<section class='carroussel-emission'>
                <div class='image'><img src='img/$image' alt='image></div>
            </section>"
                ?>
            </section>
            <h2 id="couverts">Restons couverts</h2>
            <section class="carroussel-emission">
                <?php
                echo
                "<section class='carroussel-emission'>
                <div class='image'><img src='img/$image' alt='image></div>
            </section>"
                ?>
            </section>
            <h2 id="culture">Top culture</h2>
            <section class="carroussel-emission">
                <?php
                echo
                "<section class='carroussel-emission'>
                <div class='image'><img src='img/$image' alt='image></div>
            </section>"
                ?>
            </section>
            <h2 id="garage">Voix de garage</h2>
            <section class="carroussel-emission">
                <?php
                echo
                "<section class='carroussel-emission'>
                <div class='image'><img src='img/$image' alt='image></div>
            </section>"
                ?>
            </section>
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