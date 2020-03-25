<?php
require "display.php";
require "getBirds.php";
require "connect.php";
?>

<!doctype html>
<html lang='en'>
    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>birds and that</title>
    </head>
    <body>
        <header>
            <h1>What birds are outside my window?</h1>
        </header>
        <section class='buttons'>
            <a href='inputform.php'>I just saw a new bird!</a>
            <a href='delete.php'>I want to delete a bird!</a>
            <a href='edit.php'>A bird has changed!</a>
        </section>
        <section class="birds">
            <?php
            $result = getBirds($db);
            display($result)
            ;?>
        </section>
    </body>
</html>

