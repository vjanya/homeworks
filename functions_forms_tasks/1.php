<form action="">
    <p><textarea name="area1"></textarea></p>

    <p><textarea name="area2"></textarea></p>

    <p><input type="submit"/></p>
</form>
<?php

if (isset($_GET['area1']) && isset($_GET['area2'])) {
    if ($_GET['area1'] !== '' && $_GET['area2'] !== '') {
        getCommonWords($_GET['area1'], $_GET['area2']);
    } else {
        echo 'Textareas are empty';
    }
}

function getCommonWords($a, $b)
{
    $string1 = explode(' ', $a);
    $string2 = explode(' ', $b);
    foreach ($string1 as $string1_item) {
        foreach ($string2 as $string2_item) {
            if ($string1_item === $string2_item) {
                $words_array[] = $string2_item;
            }
        }
    }
    echo 'Result '.implode(',',$words_array);

}
