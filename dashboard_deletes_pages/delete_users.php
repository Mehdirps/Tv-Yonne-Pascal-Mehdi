<?php

require_once "../includes/bdd_connect.php";

$videoId = $_GET['id'];


$sql = "DELETE FROM `users` WHERE `users`.`id` = :usersid ";

$query = $pdo->prepare($sql);

$query->bindValue(':usersid', $videoId);
$query->execute();

header("Location: ../dashboard_pages/users.php");