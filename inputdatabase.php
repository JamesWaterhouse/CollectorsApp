<?php

require 'inputform.php';
require "connect.php";

$newSpecies = 0;
$newColor = '';
$newFrequency = 0;
$newShit = 0;
$newPicture = '';

if (isset($_POST['species'])) {

    $newSpecies = $_POST['species'];
}

if (isset($_POST['color'])) {

    $newColor = $_POST['color'];
}

if (isset($_POST['frequency'])) {

    $newFrequency = $_POST['frequency'];
}

if (isset($_POST['shit'])) {

    $newShit = $_POST['shit'];
}

if (isset($_POST['picture'])) {

    $newPicture = $_POST['picture'];
} else  $newPicture = null;


$query = $db->prepare("INSERT INTO `birds` (`picture`, `species`, `color`, `frequency`, `shit`) VALUES (:picture, :species, :color, :frequency, :shit)");
$query -> bindParam(':picture', $newPicture);
$query -> bindParam(':species', $newSpecies);
$query -> bindParam(':color', $newColor);
$query -> bindParam(':frequency', $newFrequency);
$query -> bindParam(':shit', $newShit);
$query->execute();



