<?php

require_once "../includes/bdd_connect.php";

$videoId = $_GET['id'];


$sql = "DELETE FROM `users` WHERE `users`.`id` = :usersid ";

$query = $pdo->prepare($sql);

$query->bindValue(':usersid', $videoId);
$query->execute();

echo "<p style='color:salmon; margin-left:150px;margin-top:50px; font-size:3rem; width:100%; text-align:center;'>L'utilisateur a bien été supprimé</p>";

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Document</title>
</head>
<body>
    <?php
    include "../dashboard_includes/dashboard_nav.php";
    ?>
</body>
</html>