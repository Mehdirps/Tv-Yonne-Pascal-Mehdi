<?php

require_once "../includes/bdd_connect.php";

$videoId = $_GET['id'];


$sql = "DELETE FROM `emissions` WHERE `emissions`.`id` = :emissionid ";

$query = $pdo->prepare($sql);

$query->bindValue(':emissionid', $videoId);
$query->execute();

header("Location: emissions.php");