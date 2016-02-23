<?php

$i = 0;

for($n = 1000; $n >= 50; $n /=2){
    $result = $n;
    $step = $i;
    $i++;
}

echo "Залишок ".$result."<br />Кількість ітерацій " .$step;