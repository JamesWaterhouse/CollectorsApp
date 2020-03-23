<?php

    $db = new PDO('mysql:host=db; dbname=birds', 'root', 'password');

$query = $db->prepare("SELECT `picture`, `species`, `color`, `frequency`, `shit` FROM `birds`;");

$query->setFetchMode(PDO::FETCH_ASSOC);

$query->execute();

$result = $query->fetchAll();

// foreach($result as $bird) {
//     echo '<br>';
//     echo '<pre>';
//     var_dump($bird);  
//     echo '</pre>';  
// }