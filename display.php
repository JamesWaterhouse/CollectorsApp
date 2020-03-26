<?php



function display(ARRAY $array) {

    $defaultPicture = 'https://www.pinclipart.com/picdir/middle/89-893608_flying-clipart-colorful-bird-clip-art-png-transparent.png';

    foreach ($array as $bird) {
            echo '<div class="item">
                    <div class="pic">
                        <img src= "';

                            if ($bird['picture']) {
                                echo $bird['picture'];
                            } else {
                                echo $defaultPicture;
                            }

                            echo'">
                    </div>
                    <div class="text">
                    <ul class="attributes">
                        <li>Species: ' . $bird["species"] . '</li>
                        <li>Colour: ' . $bird["color"] . '</li>
                        <li>Frequency: ' . $bird["frequency"] . '</li>
                        <li>Has it shit on the window? ' . $bird["shit"] . '</li>
                        </ul>
                    
                    </div>  
                    <div class="edit">
                         <a class="link" href="edit.php?bird=' . $bird["id"] . '">Edit</a>
                         <a class="link" href="deleteSpecies.php?bird=' . $bird["id"] . '">Delete</a>
                    </div>
                </div>';
        }
    }
