<?php

$arr = array(4, 2, 5, 19, 13, 0, 10);
$e = array(2, 3, 4);

foreach ($arr as $arr_item) {
    foreach ($e as $e_item) {
        if ($arr_item == $e_item) {
            echo "Есть <br />";
        }
    }
}