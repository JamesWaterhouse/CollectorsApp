<?php

require_once 'connect.php';

$birdId = '';

if (isset($_GET['bird'])) {

    $birdId = $_GET['bird'];
}

    $query = $db->prepare("SELECT `species` FROM `birds` WHERE `id` = '$birdId'");

    $query->execute();

    $birdName = $query->fetchAll();


