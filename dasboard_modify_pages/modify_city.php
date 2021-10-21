<?php

require_once "../includes/bdd_connect.php";

$videoId = $_GET['id'];


$sql = "update `city` WHERE `city`.`id` = :cityid ";

$query = $pdo->prepare($sql);

$query->bindValue(':cityid', $videoId);
$query->execute();

header("Location: ../dashboard_pages/city.php");