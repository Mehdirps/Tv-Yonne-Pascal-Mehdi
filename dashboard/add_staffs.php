<?php
session_start();
if (!empty($_POST)) {

    if (
        isset($_POST['name'], $_POST['image']) &&
        !empty($_POST['name']) && !empty($_POST['image'])
    ) {
        if (!empty($_SESSION['message'])) {
            header('Location: add_users.php');
            exit;
        }
        $name = $_POST['name'];
        $img = $_POST['image'];

        require_once "../includes/bdd_connect.php";

        $sql = "INSERT INTO `staffs`(`name`, `img_src`) VALUES (:name, :image)";

        $query = $pdo->prepare($sql);
        $query->bindValue(':name', $name);
        $query->bindValue(':image', $img);
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
                <label for="img">Image</label>
                <input type="file" name="image" id="image">
            </div>
            <div>
                <button type="submit">Ajouter</button>
            </div>
        </form>
    </main>
</body>

</html>