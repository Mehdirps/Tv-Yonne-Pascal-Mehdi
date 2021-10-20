<?php
require_once "../includes/bdd_connect.php";
?>
<section class="board">
    <h1 class="table">Emissions</h1>
    <a href="" class="add">Ajouter des données</a>
    <div class="columns">
        <div class="datas">
            <p class="modify">Modifer</p>
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
                <a href=''>Modifer</a>
                <a href=''>Supprimer</a>
                <p>$id</p>
                <p>$name</p>
                </div>";
        }
        ?>
    </div>
</section>