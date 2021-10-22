<?php
    $name = $_POST['name'];

    require_once "../includes/bdd_connect.php";

    $sql = "INSERT INTO `emissions`(`name`) VALUES (:name)";
    
    $query = $pdo->prepare($sql);
    $query->bindValue(':name', $name);
    $query->execute();
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
   include "../dashboard_includes/dashboard_nav.php";
   ?>
   <main class="add">
   <h1>Ajouter une emission</h1>
    <form method="post">
        <div>
            <label for="name">Nom</label>
            <input type="text" name="name">
        </div>
        <div>
            <button type="submit">Ajouter</button>
        </div>
    </form>
    </main>
</body>
</html>