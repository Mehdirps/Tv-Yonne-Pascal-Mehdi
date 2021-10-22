<?php
session_start();
if (!empty($_POST)) {

    if (
        isset($_POST['name'], $_POST['image'],$_POST['description'],$_POST['link'],$_POST['city_name']) &&
        !empty($_POST['name']) && !empty($_POST['image']) && !empty($_POST['description']) && !empty($_POST['link']) && !empty($_POST['city_name'])
    ) {
        if (!empty($_SESSION['message'])) {
            header('Location: add_users.php');
            exit;
        }
        $name = $_POST['name'];
        $img = $_POST['image'];
        $description = $_POST['description'];
        $link = $_POST['link'];
        $city_id = $_POST['city_name'];

        require_once "../includes/bdd_connect.php";

        $sql = "INSERT INTO `videos`(`name`, `img_src`,`description`,`link`,`city_id`) VALUES (:name, :image, :description, :link, :city_id)";

        $query = $pdo->prepare($sql);
        $query->bindValue(':name', $name);
        $query->bindValue(':image', $img);
        $query->bindValue(':description', $description);
        $query->bindValue(':link',$link);
        $query->bindValue(':city_id', $city_id);
        $query->execute();

        $_SESSION['message'][] = "Les données ont été ajoutées";
    }else{
        $_SESSION['message'][] = "Le formulaire n'est pas complet";
    }
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une emission</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>
    <?php
    include "dashboard_nav.php";
    ?>
    <main class="add">
        <h1>Ajouter une emission</h1>
        <?php
        if (isset($_SESSION['message'])) {
            foreach ($_SESSION['message'] as $message) {
                echo "<p>$message</p>";
            }
            unset($_SESSION['message']);
        }
        ?>
        <form method="post">
            <div>
                <label for="name">Nom</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="description">Description</label>
                <input type="text" name="description" id="description">
            </div>
            <div>
                <label for="lien">Lien</label>
                <input type="text" name="link" id="link">
            </div>
            <div>
                <label for="img">Image</label>
                <input type="file" name="image" id="image">
            </div>
            <div>
                <select name="city_name" id="city_name">
                    <?php
                        require_once "../includes/bdd_connect.php";

                        $sql = "SELECT * FROM `city`";
                        $query = $pdo->query($sql);
                        $resultats = $query->fetchAll();

                        foreach($resultats as $resultat){
                            $name = $resultat['name'];
                            $id = $resultat['id'];
                            echo "<option value='$id'>$name</option>";
                        }
                    ?>
                </select>
            </div>
            <div>
                <button type="submit">Ajouter</button>
            </div>
        </form>
    </main>
</body>

</html>