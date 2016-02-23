<?php

$arr = array("January","February","March","April","May","June","July","August","September","October","November", "December");
$current = "February";

foreach($arr as $item){
    if($item == $current){
        echo "<strong>".$item."</strong></br />";
    } else {
        echo $item .'<br />';
    }
}