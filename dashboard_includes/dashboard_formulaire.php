<?php
require_once "../includes/bdd_connect.php";
?>
<section class="board">
    <h1 class="table">Formulaire</h1>
    <a href="" class="add">Ajouter des données</a>
    <div class="columns">
        <div class="datas">
            <p class="modify">Modifer</p>
            <p class="delete">Supprimer</p>
            <p>Nom</p>
            <p>Prenom</p>
            <p>Email</p>
            <p>Sujet</p>
            <p>Message</p>
            <p>Création</p>
        </div>
        <?php
        $sql = "SELECT * FROM `formulaires`";
        $query = $pdo->query($sql);
        $resultats = $query->fetchAll();

        foreach ($resultats as $resultat) {
            $name = $resultat['name'];
            $firstname = $resultat['first_name'];
            $email = $resultat['email'];
            $subject = $resultat['subject'];
            $message = $resultat['message'];
            $creation = $resultat['created_at'];
            echo
            "<div class='datas'>
                <a href=''>Modifer</a>
                <a href=''>Supprimer</a>
                <p>$name</p>
                <p>$firstname</p>
                <p>$email</p>
                <p>$subject</p>
                <p>$message</p>
                <p>$creation</p>
                </div>";
        }
        ?>
    </div>
</section>