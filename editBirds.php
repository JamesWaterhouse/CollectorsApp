<?php

require_once 'connect.php';
require_once 'edit.php';

$editColor = $color;
$editFrequency = $frequency;
$editShit = $shit;
$editPicture = $picture;



if (isset($_POST['color'])) {

    $editColor = $_POST['color'];
} else {$editColor = $color;}

if (isset($_POST['frequency'])) {

    $editFrequency = $_POST['frequency'];
}

if (isset($_POST['shit'])) {

    $editShit = $_POST['shit'];
}

if (isset($_POST['picture'])) {

    $editPicture = $_POST['picture'];
} else {$editPicture = $picture;}



$query = $db->prepare("UPDATE `birds` SET `color` = :editColor, `frequency` = :editFrequency, `shit` = :editShit, `picture` = :editPicture WHERE `id` = :selectedId");

$query -> bindParam(':editPicture', $editPicture);
$query -> bindParam(':selectedId', $id);
$query -> bindParam(':editColor', $editColor);
$query -> bindParam(':editFrequency', $editFrequency);
$query -> bindParam(':editShit', $editShit);

$query->execute();

$query->fetchAll();



