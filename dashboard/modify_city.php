<?php
session_start();


if (!empty($_GET)) {

    if (
        isset($_GET['id']) &&
        !empty($_GET['id'])

    ) {

        $cityId = $_GET['id'];


        exit;
    }
}

if (!empty($_POST)) {
    // var_dump($_POST);
    // die;

    if (
        isset($_POST['name'], $_POST['code']) &&
        !empty($_POST['name']) &&
        !empty($_POST['code'])
    ) {
        $name = ($_POST['name']);
        $citycode = ($_POST['code']);

        require_once "../includes/bdd_connect.php";

        $sql = "update `city` SET `name` = :name, `city_code` = :citycode WHERE `id` = :cityid ";

        $query = $pdo->prepare($sql);

        $query->bindValue(':name', $name);
        $query->bindValue(':firstname', $citycode);
        $query->bindValue(':cityid', $cityId);

        $query->execute();

        header("Location: city.php");
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une ville</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>
    <?php
    include "dashboard_nav.php";
    ?>
    <main class="add">
        <h1>Modifier une ville</h1>
        <form method="post">
            <div>
                <label for="name">Nom</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="code">Code commune</label>
                <input type="text" name="code">
            </div>
            <div>
                <button type="submit">Ajouter</button>
            </div>
        </form>
    </main>
</body>

</html>