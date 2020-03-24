<?php

require 'inputform.php';
require "connect.php";

$species = '';
$color = '';
$frequency = '';
$shit = '';

if (isset($_POST['species'])) {

    $species = $_POST['species'];
}

if (isset($_POST['color'])) {

    $color = $_POST['color'];
}

if (isset($_POST['frequency'])) {

    $frequency = $_POST['frequency'];
}

if (isset($_POST['shit'])) {

    $shit = $_POST['shit'];
}

if (isset($_POST['picture'])) {

    $picture = $_POST['picture'];
}

if ($picture == '') {
    $picture = null;
}

$query = $db->prepare("INSERT INTO `birds` (`picture`, `species`, `color`, `frequency`, `shit`) VALUES (:picture, :species, :color, :frequency, :shit)");
$query->setFetchMode(PDO::FETCH_ASSOC);
$query -> bindParam(':picture', $picture);
$query -> bindParam(':species', $species);
$query -> bindParam(':color', $color);
$query -> bindParam(':frequency', $frequency);
$query -> bindParam(':shit', $shit);
$query->execute();



