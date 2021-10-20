<?php
require_once "../includes/bdd_connect.php";
?>
<section class="board">
    <h1 class="table">Utilisateurs</h1>
    <a href="" class="add">Ajouter des données</a>
    <div class="columns">
        <div class="datas">
            <p class="modify">Modifer</p>
            <p class="delete">Supprimer</p>
            <p>Nom</p>
            <p>Email</p>
            <p>Role</p>
        </div>
        <?php
        $sql = "SELECT * FROM `users`";
        $query = $pdo->query($sql);
        $resultats = $query->fetchAll();

        foreach ($resultats as $resultat) {
            $name = $resultat['name'];
            $email = $resultat['email'];
            $role = $resultat['role'];
            
            echo
            "<div class='datas'>
                <a href=''>Modifer</a>
                <a href=''>Supprimer</a>
                <p>$name</p>
                <p>$email</p>
                <p>$role</p>
                </div>";
        }
        ?>
    </div>
</section>