<form action="">
    <p><textarea name="area1" rows="4" cols="50"></textarea></p>

    <p><input type="submit"/></p>
</form>
<?php

if (isset($_GET['area1'])) {
    if ($_GET['area1'] !== '') {
        capitalize($_GET['area1']);
    } else {
        echo 'Textareas is empty';
    }
}

function capitalize($words)
{
    $words_array = explode('. ', $words);
    foreach($words_array as $key => $words_array_item){
        $words_array[$key]= ucfirst(strtolower($words_array_item));
    }
    echo implode('. ',$words_array);

}
