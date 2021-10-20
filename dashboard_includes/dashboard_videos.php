<?php
require_once "../includes/bdd_connect.php";
?>
<section class="board">
    <h1 class="table">Videos</h1>
    <a href="" class="add">Ajouter des données</a>
    <div class="columns">
        <div class="datas">
            <p class="modify">Modifer</p>
            <p class="delete">Supprimer</p>
            <p>Nom</p>
            <p>Description</p>
            <p>Nom Ville</p>
        </div>
        <?php
        $sql = "SELECT * FROM `videos`";
        $query = $pdo->query($sql);
        $resultats = $query->fetchAll();

        foreach ($resultats as $resultat) {
            $name = $resultat['name'];
            $description = $resultat['description'];
            $name_city = $resultat['name_city'];
            
            echo
            "<div class='datas'>
            <a href=''>Modifer</a>
            <a href=''>Supprimer</a>
            <p>$name</p>
            <p>$description</p>
            <p>$name_city</p>
            </div>";
        }
        ?>
        <!-- $emission_id = $resultat['emission_id'];
        <p>$emission_id</p>
        <p>$image</p>
        $image = $resultat['img_src'];
        $link = $resultat['link'];
        $city_code = $resultat['city_id'];
        $creation = $resultat['created_at'];
            <p>$link</p>
            <p>$city_code</p>
            <p>$creation</p> -->
    </div>
</section>
