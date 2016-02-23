<?php

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$count = 0;

foreach($arr as $item){
    if($count%3 === 0){
        echo '<br />';
    }
    echo $item;
    $count++;
}