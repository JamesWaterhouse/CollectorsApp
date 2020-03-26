<?php
require_once 'connect.php';
require_once 'editBirds.php';
require_once 'getBirdFromId.php';

$birdId = $_GET['bird'];

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <link href='styles/normalize.css' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway&display=swap' rel='stylesheet'>
    <link rel='stylesheet' type='text/css' href='styles.css'>
    <title>form</title>
</head>
<body>
<header>
    <h1>Edit <?php echo $birdName[0]['species']; ?></h1>
</header>
    <section class='form'>
        <div id='form'>
            <form action='edit.php' method='post'>

                <label for='color'>Colour</label>
                <input type='text' id='color' name='color' placeholder='What colour was it'>

                <label for='frequency'>Frequency</label>
                <select id='frequency' name='frequency'>
                    <option value=0 disabled selected>How often do you see it?</option>
                    <option value=1>All the fucking time</option>
                    <option value=2>Common</option>
                    <option value=3>Rare</option>
                    <option value=4>Saw it in my dreams</option>
                </select>

                <label for='shit'>Has it shit on the window?</label>
                <select id='shit' name='shit'>
                    <option value=0 disabled selected>Has it shit on the window?</option>
                    <option value=1>Yes</option>
                    <option value=2>No</option>
                </select>

                <label for='picture'>Picture Url</label>
                <input type='text' id='picture' name='picture' placeholder='url of picture'>

                <input type="submit" value="Update Bird">
            </form>
        </div>
    </section>
    <section class="backButtons">
        <a href="index.php">Go back</a>
    </section>
 </body>
</html>