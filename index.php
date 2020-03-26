<?php
require "displayAllFunction.php";
require "getBirdsFunction.php";
require "databaseConnectFunction.php";
?>

<!doctype html>
<html lang='en'>
    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles/styles.css">
        <title>birds and that</title>
    </head>
    <body>
        <header>
            <h1>What birds are outside my window?</h1>
        </header>
        <section class='buttons'>
            <a href='addNewUserInput.php'>I just saw a new bird!</a>
        </section>
        <section class="birds">
            <?php
            $result = getBirds($db);
            display($result)
            ;?>
        </section>
    </body>
</html>

