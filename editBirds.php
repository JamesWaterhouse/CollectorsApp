<?php

require_once 'connect.php';
require_once 'edit.php';

$query = $db->prepare("UPDATE `birds` SET `species` = '$deleteSpecies'");

$query->execute();

return $query->fetchAll();

