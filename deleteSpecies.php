<?php

require_once 'connect.php';
require_once 'delete.php';

$deleteSpecies = '';

if (isset($_POST['delspecies'])) {

    $deleteSpecies = $_POST['delspecies'];
}

$query = $db->prepare("DELETE FROM `birds` WHERE `species` = '$deleteSpecies'");

$query->execute();

return $query->fetchAll();


