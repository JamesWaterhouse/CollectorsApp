<!doctype html>
<html lang='en'>
    <head>
        <link href="styles/normalize.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <title>birds and that</title>
        <?php require "display.php";
              require "get.php";?>
    </head>
    <body>
        <header>
            <h1>What birds are outside my window?</h1>
        </header>
   
        
        <section class="birds" >
            <?php display($result);?>
        </section>

        
     
    </body>
</html>

