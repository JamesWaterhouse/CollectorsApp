<?php

    $db = new PDO('mysql:host=db; dbname=birds', 'root', 'password');

$query = $db->prepare("SELECT `species`, `color`, `frequency`, `shit` FROM `birds`;");

$query->setFetchMode(PDO::FETCH_ASSOC);

$query->execute();

$result = $query->fetchAll();

