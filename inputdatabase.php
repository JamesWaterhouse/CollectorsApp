<?php

require 'inputform.php';

$species = '';
$color = '';
$frequency = '';
$shit = '';
$picture = '';

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

$db = new PDO('mysql:host=db; dbname=birds', 'root', 'password');

$query = $db->prepare("INSERT INTO `birds` (`picture`, `species`, `color`, `frequency`, `shit`) VALUES ('$picture', '$species', '$color', $frequency, $shit)");
$query->setFetchMode(PDO::FETCH_ASSOC);
$query->execute();

header("Location: index.php");


