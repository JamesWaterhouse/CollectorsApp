<?php

require_once 'connect.php';

header("Location:index.php");

$birdId = '';

if (isset($_GET['bird'])) {

    $birdId = $_GET['bird'];
}

$query = $db->prepare("DELETE FROM `birds` WHERE `id` = :birdId");

$query -> bindParam(':birdId', $birdId);

$query->execute();

$query->fetchAll();




