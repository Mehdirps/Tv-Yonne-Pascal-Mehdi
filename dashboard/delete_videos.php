<?php

require_once "../includes/bdd_connect.php";

$videoId = $_GET['id'];


$sql = "DELETE FROM `videos` WHERE `videos`.`id` = :videoid ";

$query = $pdo->prepare($sql);

$query->bindValue(':videoid', $videoId);
$query->execute();

header("Location: videos.php");