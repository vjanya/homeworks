<?php
$num = 123;
$string = (string)$num;
$num_count = strlen($string);
$sum = 0;

for($i = 0; $i < $num_count; $i++){
   $sum += $string[$i];
}

echo $sum;