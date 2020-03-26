<?php
$db = new PDO('mysql:host=db; dbname=birds', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);