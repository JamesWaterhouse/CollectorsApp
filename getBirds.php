<?php
require "connect.php";

function getBirds($db) {

    $query = $db->prepare("SELECT `picture`, `species`, `color`, `frequency`, `shit` FROM `birds`;");

    $query->execute();

    $result = $query->fetchAll();

    return $result;
}
