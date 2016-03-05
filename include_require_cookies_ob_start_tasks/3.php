<?php
if (isset($_GET['submited']) && isset($_GET['color'])) {
    $color_style = "style='color:{$_GET['color']}'";
    setcookie('text_color', $_GET['color']);
} elseif (isset($_COOKIE['text_color'])) {
    $color_style = "style='color:{$_COOKIE['text_color']}'";
} else {
    $color_style = '';
}


$select_array = array('black' => 'Black', 'red' => 'Red', 'green' => 'Green', 'blue' => 'Blue', 'grey' => 'Grey', 'yellow' => 'Yellow');

function outputSelect($array)
{
    if (isset($_COOKIE['text_color'])) {
        $color_in_cookie = $_COOKIE['text_color'];
    } else {
        $color_in_cookie = '';
    }
    foreach ($array as $key => $array_item) {
        ob_flush();
        ($key == $color_in_cookie ? $selected = "selected='seleted'" : $selected = "");
        echo "<option value='" . $key . "' " . $selected . ">" . $array_item . "</option>";
    }
}

;
?>
<form method="get">
    <p>Please select the color</p>
    <select name="color">
        <?php
        outputSelect($select_array);
        ?>
    </select>
    <br/>
    <input type="submit" name="submited" value="Submit"/>
</form>
<p <?= $color_style ?>>Proin sed enim consectetur, tincidunt augue id, mattis libero! Etiam gravida urna a lacus luctus,
    sit amet laoreet ligula porta. Mauris sit amet efficitur orci, non convallis nulla. Nullam tincidunt eleifend diam
    vitae consequat. Nunc lacinia massa quis malesuada aliquet. Duis quis tortor egestas, finibus mi ac, luctus magna.
    Proin consequat; mauris tempor tempor venenatis, lectus quam volutpat nisi, vel pretium neque sapien et nulla. Nulla
    lacinia purus in nisl pretium congue? Phasellus sodales fermentum ex, sed ullamcorper enim elementum et. Cras non
    magna eu velit sagittis vulputate eget et mauris!</p>

