<?php

$sum = 0;
$arr = array(1, 20, 15, 17, 24, 35);

foreach($arr as $item){
    $sum += $item;
}

echo 'Sum: ' . $sum;