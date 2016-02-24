<?php
$number = 442158755745;
$arr = str_split($number);
$find = 5;
$counter = 0;

foreach($arr as $arr_item){
    if($find == $arr_item){
        $counter++;
    }
}

echo $counter;