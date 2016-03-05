<?php

for($i = 0; $i < 10; $i++){
    $array[] = rand(0, 25);
    echo $array[$i].',';
}

//$max = max($array);
//$max_pos = array_search($max, $array);
//$min = min($array);
//$min_pos = array_search($min, $array);
//
//
//$array[$max_pos] = $min;
//$array[$min_pos] = $max;


echo '<br />';

foreach($array as $array_item){
    echo $array_item,',';
}

function getMaxPosVal($array){
    $item = current($array);
    $key_pos = key($array);
    foreach($array as $key => $array_item){
        if($item < $array_item){
            $item = $array_item;
            $key_pos = $key;
        }
    }
    return array($key_pos, $array_item);
}

list($x, $y) = getMaxPosVal($array);
