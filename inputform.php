
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
                    <form name='add_bird' method='post' action='inputdatabase.php' id='add_bird'>

                        <input type='text' id='species' name='species' placeholder='What kind of bird?'>
                        <input type='text' id='color' name='color' placeholder='What colour was it'>
                        <select id='frequency' name='frequency'>
                            <option value=0 disabled selected>How often do you see it?</option>
                            <option value=1>All the fucking time</option>
                            <option value=2>Common</option>
                            <option value=3>Rare</option>
                            <option value=4>Saw it in my dreams</option>
                        </select>

                        <select id='shit' name='shit'>
                            <option value=0 disabled selected>Has it shit on the window?</option>
                            <option value=1>Yes</option>
                            <option value=2>No</option>
                            
                        </select>
                        <input type='text' id='picture' name='picture' placeholder='url of picture'>
                        <input type='submit' value='Add Bird'>

                    </form>
                </div>
        </section>
     
    </body>
</html>


