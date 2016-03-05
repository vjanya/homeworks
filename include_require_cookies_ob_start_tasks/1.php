<?php

if (isset($_GET['sendform'])) {
    if (isset($_COOKIE['times'])) {
        if ($_COOKIE['times'] < 3) {
            $counter = $_COOKIE['times'] + 1;
            setcookie('times', $counter, time() + 10);
        } else {
            echo "You can't send more than 3 messages per minute";
        }
    } else {
        setcookie('times', 1, time() + 10);
    }
}
setcookie('times', 1, time() + 10);

?>

<form method="get" action="1.php">
    <input type="text" name="sendform"/><br/>
    <input type='submit'/>
</form>
