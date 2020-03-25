<?php

require 'connect.php';
require 'getSpecies.php';
require 'deleteSpecies.php';

$species = getSpeciesList($db);



?>


<html lang='en'>
<head>
    <link href='styles/normalize.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway&display=swap' rel='stylesheet'>
    <link rel='stylesheet' type='text/css' href='styles.css'>
    <title>form</title>
</head>
<body>
    <section class='form'>
        <div id='form'>
            <form action='delete.php' method='post'>
                <select name="delspecies" id="delspecies">
                    <option>Select a bird to delete:</option>

                        <?php foreach ($species as $s) {

                   echo  "<option value='" . $s['species'] . "'>"  . $s['species'] . "</option>"; } ?>
                </select>
                <input type="submit" value="Delete Bird">
            </form>
        </div>
    </section>
    <section class="buttons">
        <a href="index.php">Go back</a>
    </section>
 </body>
</html>

