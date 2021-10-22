<?php
session_start();

if (!empty($_GET)) {

    if (
        isset($_GET['id']) &&
        !empty($_GET['id'])

    ) {

        $cityId = $_GET['id'];

        require_once "../includes/bdd_connect.php";

        $sql = "update `city` SET `name`, `city_code` WHERE `id` = :cityid ";

        $query = $pdo->prepare($sql);

        $query->bindValue(':cityid', $cityId);
        $query->execute();

        header("Location: city.php");
    }
}
