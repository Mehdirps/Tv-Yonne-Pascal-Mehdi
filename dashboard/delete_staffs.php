<?php

require_once "../includes/bdd_connect.php";

$videoId = $_GET['id'];


$sql = "DELETE FROM `staffs` WHERE `staffs`.`id` = :staffid ";

$query = $pdo->prepare($sql);

$query->bindValue(':staffid', $videoId);
$query->execute();

header("Location: staffs.php");