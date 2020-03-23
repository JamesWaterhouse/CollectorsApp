<!doctype html>

<html lang='en'>
<head>

    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>birds and that</title>
    <?php
    require "database.php";
    ?>
    
    

</head>

<body>
    <header>
        <h1>
        What birds are outside my window?
        </h1>
    </header>

    <section >
        <p class="item">
            <h2>Species:</h2>
                <?php
                echo $result[0]['species'];
            ?>
        </p>

        <p class="item">
            <?php
                echo $result[1]['species'];
            ?>
        </p>

        <p class="item">
            <?php
                echo $result[2]['species'];
            ?>
        </p>


    </section>
</body>

</html>


