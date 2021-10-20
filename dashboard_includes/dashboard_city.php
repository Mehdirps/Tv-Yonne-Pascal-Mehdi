<?php
require_once "../includes/bdd_connect.php";
?>
<section class="board">
    <h1 class="table">Villes</h1>
    <a href="" class="add">Ajouter des données</a>
    <div class="columns">
        <div class="datas">
            <p class="modify">Modifer</p>
            <p class="delete">Supprimer</p>
            <p>Nom</p>
            <p>Code commune</p>
        </div>
        <?php
        $sql = "SELECT * FROM `city`";
        $query = $pdo->query($sql);
        $resultats = $query->fetchAll();

        foreach ($resultats as $resultat) {
            $name = $resultat['name'];
            $code = $resultat['city_code'];

            echo
            "<div class='datas'>
                <a href=''>Modifer</a>
                <a href=''>Supprimer</a>
                <p>$name</p>
                <p>$code</p>
                </div>";
        }
        ?>
    </div>
</section>