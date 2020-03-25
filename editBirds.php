<?php

require_once 'connect.php';
require_once 'edit.php';

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
}


if (isset($_POST['species'])) {

    $selectedSpecies = $_POST['species'];
}

$query = $db->prepare("UPDATE `birds` SET `color` = :newColor, `frequency` = :newFrequency, `shit` = :newShit, `picture` = :newPicture WHERE `species` = :selectedSpecies");

$query -> bindParam(':newPicture', $newPicture);
$query -> bindParam(':selectedSpecies', $selectedSpecies);
$query -> bindParam(':newColor', $newColor);
$query -> bindParam(':newFrequency', $newFrequency);
$query -> bindParam(':newShit', $newShit);

$query->execute();

return $query->fetchAll();

