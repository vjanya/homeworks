<?php

$colors = array('red', 'yellow', 'blue', 'orange', 'green');

echo '<table>';

for($row = 0; $row < 20; $row++){
    echo '<tr>';
    for($cols = 0; $cols < 30; $cols++){
        $rand_num = rand(0,9999);
//        $bg = $colors[array_rand($colors)];
        echo '<td style="background-color: '. $colors[array_rand($colors)] .'">' .$rand_num .'</td>';
    }
    echo '</tr>';
}

echo '</table>';
