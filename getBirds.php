<?php
require "connect.php";

function getBirds(PDO $db) {

    $query = $db->prepare("SELECT `id`, `picture`, `species`, `color`, `frequency`, `shit` FROM `birds`;");

    $query->execute();

    return $query->fetchAll();
}
