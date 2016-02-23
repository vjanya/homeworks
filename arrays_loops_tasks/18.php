<?php

$days = array(
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday'
);

$weekends = array(
    'Saturday',
    'Sunday'
);

foreach($days as $day){
    foreach($weekends as $weekend){
        if($day == $weekend){
            $day =  "<strong>".$day."</strong>";
        }
    }
    echo $day."<br />";
}