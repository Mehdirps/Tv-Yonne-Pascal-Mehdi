<?php
require_once "../includes/bdd_connect.php";
?>
<section class="board">
    <h1 class="table">Partenaires</h1>
    <a href="add_partners.php" class="add">Ajouter des données</a>
    <div class="columns">
        <div class="datas">
            <p class="modify">Modifier</p>
            <p class="delete">Supprimer</p>
            <p>Nom</p>
            <p>Nom de l'image</p>
        </div>
        <?php
        $sql = "SELECT * FROM `partners`";
        $query = $pdo->query($sql);
        $resultats = $query->fetchAll();

        foreach ($resultats as $resultat) {
            $id = $resultat['id'];
            $name = $resultat['name'];
            $image = $resultat['img_src'];
            
            echo
            "<div class='datas'>
                <a href='$id'>Modifier</a>
                <a href='delete_partners.php?id=$id'>Supprimer</a>
                <p>$name</p>
                <p>$image</p>
                </div>";
        }
        ?>
    </div>
</section>
