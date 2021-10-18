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
        <?php
        include "includes/partners.php"
        ?>
    </main>
    <?php
    include "includes/footer.php"
    ?>
</body>

</html>