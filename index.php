<html>
<head>

    <link rel="stylesheet" type="text/css" href="styles.css">
    
    <?php

    $db = new PDO('mysql:host=db; dbname=mailmerge', 'root', 'password');

$query = $db->prepare("SELECT `name`, `email` FROM `users`;");

$query->setFetchMode(PDO::FETCH_ASSOC);

$query->execute();

$result = $query->fetchAll();

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
            <img src="https://www.transparentpng.com/thumb/seagull/Vph8Vo-seagull-free-download-transparent.png" alt="Seagull">
        </item>

        <p class="item">

        </item>

        <p class="item">

        </item>


    </section>
</body>

</html>

