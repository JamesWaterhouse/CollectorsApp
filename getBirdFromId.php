<?php

require_once 'connect.php';


if (isset($_GET['bird'])) {

    $birdId = $_GET['bird'];
}

    $query = $db->prepare("SELECT * FROM `birds` WHERE `id` = :birdId");
    $query -> bindParam(':birdId', $birdId);
    $query->execute();

    $bird = $query->fetchAll();


