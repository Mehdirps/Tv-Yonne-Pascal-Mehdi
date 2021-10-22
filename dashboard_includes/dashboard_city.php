<?php
require_once "../includes/bdd_connect.php";
?>
<section class="board">
    <h1 class="table">Villes</h1>
    <a href="" class="add">Ajouter des données</a>
    <div class="columns">
        <div class="datas">
            <p class="modify">Modifier</p>
            <p class="delete">Supprimer</p>
            <p>Nom</p>
            <p>Code commune</p>
        </div>
        <?php
        $sql = "SELECT * FROM `city`";
        $query = $pdo->query($sql);
        $resultats = $query->fetchAll();

        foreach ($resultats as $resultat) {
            $id = $resultat['id'];
            $name = $resultat['name'];
            $code = $resultat['city_code'];

            echo
            "<div class='datas'>
                <a href='../dashboard_modify_pages/modify_city.php?id=$id'>Modifier</a>
                <a href='../dashboard_deletes_pages/delete_city.php?id=$id'>Supprimer</a>
                <p>$name</p>
                <p>$code</p>
                </div>";
        }
        ?>
    </div>
</section>