<?php

$num = 1;

for($i = 0; $i < 10; $i++){
    $array[] = rand(0, 100);
    echo $array[$i].',';
}

foreach($array as $key => $array_item){
    if( $key % 2 === 1 && $array_item > 0){
        echo '<br /> Непарні - '.$array_item;
    } elseif($key % 2 === 0 && $array_item > 0) {
        $num *= $array_item;
    }
}

echo '<br /> Результат множення - '.$num;