<?php
require_once "../includes/bdd_connect.php";
?>
<section class="board">
    <h1 class="table">Newsletter</h1>
    <a href="" class="add">Ajouter des données</a>
    <div class="columns">
        <div class="datas">
            <p class="modify">Modifier</p>
            <p class="delete">Supprimer</p>
            <p>E-mail</p>
            <p>Création</p>
        </div>
        <?php
        $sql = "SELECT * FROM `newsletter`";
        $query = $pdo->query($sql);
        $resultats = $query->fetchAll();

        foreach ($resultats as $resultat) {
            $id = $resultat['id'];
            $name = $resultat['name'];
            $email = $resultat['email'];

            echo
            "<div class='datas'>
                <a href='$id'>Modifier</a>
                <a href='$id'>Supprimer</a>
                <p>$name</p>
                <p>$email</p>
                </div>";
        }
        ?>
    </div>
</section>