<?php

require_once "../includes/bdd_connect.php";

$videoId = $_GET['id'];


$sql = "DELETE FROM `partners` WHERE `partners`.`id` = :partnerid ";

$query = $pdo->prepare($sql);

$query->bindValue(':partnerid', $videoId);
$query->execute();

header("Location: ../dashboard_pages/partners.php");