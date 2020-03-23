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

    
    <?php foreach($result as $bird) {
        echo '<div class="item">
            <div class="pic">
                <img src= "';
                
                echo $bird['picture'];
                
                echo'">
            </div>';


            echo '<div class="text">
                <ul class="attributes">';
                   echo '<li>Species: '; echo $bird["species"]; echo'</li>';
                   echo '<li>Colour: '; echo $bird["color"]; echo'</li>';
                   echo '<li>Frequency: '; echo $bird["frequency"]; echo'</li>';
                   echo '<li>Has it shit on me? '; echo $bird["shit"]; echo'</li>';
               echo '</ul>
            </div>  
        </div>';
    }

?>


    </section>
</body>

</html>

