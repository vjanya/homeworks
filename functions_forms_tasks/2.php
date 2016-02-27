<form action="">
    <p><textarea name="area1"></textarea></p>
    <p><input type="submit"/></p>
</form>
<?php

if (isset($_GET['area1'])) {
    if ($_GET['area1'] !== '') {
        longestWord($_GET['area1']);
    } else {
        echo 'Textareas is empty';
    }
}

function longestWord($word)
{
    $string_array = explode(' ', $word);
    $word_count = 0;
    foreach($string_array as $string_array_item){
        if($word_count < strlen($string_array_item)){
            $word_count = strlen($string_array_item);
        }


    }

    echo 'Result '.$word_count;

}
