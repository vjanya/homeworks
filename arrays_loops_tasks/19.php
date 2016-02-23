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

$day = "Tuesday";

foreach($days as $day_single){
        if($day_single == $day){
            $day_single =  "<strong>".$day_single."</strong>";
        }
    echo $day_single."<br />";
}