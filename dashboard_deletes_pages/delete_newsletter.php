<?php

require_once "../includes/bdd_connect.php";

$videoId = $_GET['id'];


$sql = "DELETE FROM `newsletter` WHERE `newsletter`.`id` = :newsid ";

$query = $pdo->prepare($sql);

$query->bindValue(':newsid', $videoId);
$query->execute();

header("Location: ../dashboard_pages/newsletter.php");