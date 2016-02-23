<?php

$result = 0;
$arr = array(26, 17, 136, 12, 79, 1);

foreach($arr as $item){
    $item *= $item;
    $result += $item;
}

