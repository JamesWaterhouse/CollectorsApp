<?php

require 'connect.php';

function getSpeciesList(PDO $db)

{

    $query = $db->prepare("SELECT DISTINCT `species` FROM `birds`");

    $query->execute();

    return $query->fetchAll();

}