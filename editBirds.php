<?php

require_once 'connect.php';
require_once 'edit.php';

$editColor = $color;
$editFrequency = $frequency;
$editShit = $shit;
$editPicture = $picture;



if (isset($_POST['color'])) {

    $editColor = $_POST['color'];
}

if (isset($_POST['frequency'])) {

    $editFrequency = $_POST['frequency'];
}

if (isset($_POST['shit'])) {

    $editShit = $_POST['shit'];
}

if (isset($_POST['picture'])) {

    $editPicture = $_POST['picture'];
}



$query = $db->prepare("UPDATE `birds` SET `color` = '$editColor', `frequency` = '$editFrequency', `shit` = '$editShit', `picture` = '$editPicture' WHERE `id` = '$id'");

$query -> bindParam(':newPicture', $editPicture);
$query -> bindParam(':selectedId', $id);
$query -> bindParam(':newColor', $editColor);
$query -> bindParam(':newFrequency', $editFrequency);
$query -> bindParam(':newShit', $editShit);

$query->execute();

return $query->fetchAll();



