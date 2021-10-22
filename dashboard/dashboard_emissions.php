<?php
require_once "../includes/bdd_connect.php";
?>
<section class="board">
    <h1 class="table">Emissions</h1>
    <a href="add_emissions.php" class="add">Ajouter des données</a>
    <div class="columns">
        <div class="datas">
            <p class="modify">Modifier</p>
            <p class="delete">Supprimer</p>
            <p>ID de l'emission</p>
            <p>Nom</p>
        </div>
        <?php
        $sql = "SELECT * FROM `emissions`";
        $query = $pdo->query($sql);
        $resultats = $query->fetchAll();

        foreach ($resultats as $resultat) {
            $id = $resultat['id'];
            $name = $resultat['name'];

            echo
            "<div class='datas'>
                <a href='$id'>Modifier</a>
                <a href='delete_emissions.php?id=$id'>Supprimer</a>
                <p>$id</p>
                <p>$name</p>
                </div>";
        }
        ?>
    </div>
</section>