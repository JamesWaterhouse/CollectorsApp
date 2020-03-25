<?php 
function display(ARRAY $array) {
    foreach ($array as $bird) {
            echo '<div class="item">
                    <div class="pic">
                        <img src= "' . $bird['picture'] . '">
                    </div>' . '<div class="text">
                    <ul class="attributes">' .
                        '<li>Species: ' . $bird["species"] . '</li>' .
                        '<li>Colour: ' . $bird["color"] . '</li>' .
                        '<li>Frequency: ' . $bird["frequency"] . '</li>' .
                        '<li>Has it shit on the window? ' . $bird["shit"] . '</li>' .
                    '</ul>
                </div>  
            </div>';
        }
    }
