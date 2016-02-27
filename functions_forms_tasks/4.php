<form action="">
    <p><textarea name="area1" rows="4" cols="50"></textarea></p>

    <p><input type="submit"/></p>
</form>
<?php

if (isset($_GET['area1'])) {
    if ($_GET['area1'] !== '') {
        wordsUniq($_GET['area1']);
    } else {
        echo 'Textareas is empty';
    }
}

function wordsUniq($words)
{
    $words_array = explode(' ', $words);
    $uniq_array = array_unique($words_array);
    echo count($uniq_array);
}
