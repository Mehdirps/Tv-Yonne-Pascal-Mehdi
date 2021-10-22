<?php

require_once "../includes/bdd_connect.php";

$videoId = $_GET['id'];


$sql = "DELETE FROM `formulaires` WHERE `formulaires`.`id` = :formid ";

$query = $pdo->prepare($sql);

$query->bindValue(':formid', $videoId);
$query->execute();

header("Location: formulaires.php");