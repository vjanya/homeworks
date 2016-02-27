<form action="">
    <p><textarea name="area1" rows="4" cols="50"></textarea></p>

    <p><input type="submit"/></p>
</form>
<?php

if (isset($_GET['area1'])) {
    if ($_GET['area1'] !== '') {
        wordsPosition($_GET['area1']);
    } else {
        echo 'Textareas is empty';
    }
}

function wordsPosition($word)
{
    $i = strlen($word);
    while($i > 0 ){
        $i--;
        echo $word[$i];
    }
}
