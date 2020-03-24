<?php

require "connect.php";

function get($db) {

$query = $db->prepare("SELECT `picture`, `species`, `color`, `frequency`, `shit` FROM `birds`;");

$query->setFetchMode(PDO::FETCH_ASSOC);

$query->execute();

$result = $query->fetchAll();

return $result;

}

$result = get($db);