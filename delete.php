<?php

require 'connect.php';
require 'getSpecies.php';

$Species = getSpeciesList($db);

?>

<html>
    <form action='delete.php' method='post'>
        <label for="Bird">Type</label>
        <select name="Group" id="Group">
            <option>Select a type:</option>

<?php foreach ($species as $s) { ?>


    <option value=' <?php echo $s['species'] . "'>"  . $s['species'] . "</option>"; } ?>

    </form>

</html>
