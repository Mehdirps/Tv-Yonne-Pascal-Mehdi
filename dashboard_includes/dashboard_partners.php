<?php
require_once "../includes/bdd_connect.php";
?>
<section class="board">
    <h1 class="table">Partenaires</h1>
    <a href="" class="add">Ajouter des données</a>
    <div class="columns">
        <div class="datas">
            <p class="modify">Modifer</p>
            <p class="delete">Supprimer</p>
            <p>Nom</p>
            <p>Nom de l'image</p>
        </div>
        <?php
        $sql = "SELECT * FROM `partners`";
        $query = $pdo->query($sql);
        $resultats = $query->fetchAll();

        foreach ($resultats as $resultat) {
            $name = $resultat['name'];
            $image = $resultat['img_src'];
            
            echo
            "<div class='datas'>
                <a href=''>Modifer</a>
                <a href=''>Supprimer</a>
                <p>$name</p>
                <p>$image</p>
                </div>";
        }
        ?>
    </div>
</section>
