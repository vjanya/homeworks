<?php

    if( $_FILES && isset($_FILES['photo']) ){
        foreach($_FILES['photo']['name'] as $key => $value){
            $tmp_name = $_FILES['photo']['tmp_name'][$key];
            $name = rand().'.txt';
            move_uploaded_file($tmp_name, 'uploads/'.$name);
        }
    }

    echo "<pre>";
    print_r($_REQUEST);
    print_r($_FILES);

?>

<br>

<form method="post" enctype="multipart/form-data">

    <label for="name">Your Name</label>
    <input id="name" type="text" name="name" placeholder="Your Name" /><br>

    <label for="email">Your Email</label>
    <input id="email" type="text" name="email" placeholder="Your Email" /><br>

    <label for="comment">Your Message</label>
    <textarea id="comment" name="comment"></textarea> <br><br>

    <input type="checkbox" name="agree" value="1" /> Agree with Terms <br>

    <select name="country_code[]" multiple="multiple">
        <option value="ua">Ukraine</option>
        <option value="ca">Canada</option>
        <option value="us">USA</option>
    </select>

    <input type="file" name="photo[]" multiple="multiple" />

    <input type="submit" />

</form>
<br><br>