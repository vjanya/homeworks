<?php

$visits = 0;
if ( isset($_COOKIE['visits']) ){
    $visits = $_COOKIE['visits'];
}

$visits++;

//echo time(); // 1970-01-01 00:00:00


setcookie('visits', $visits, time()+3);
echo "Ви зайшли на сайт {$visits} раз";