<?php
    $files = glob('pages/*.php');
?>
<form method="get">
    <select name="filename">
        <?php
            foreach($files as $file){
                echo "<option value='{$file}'>{$file}</option>";
            }
        ?>
        <input type="submit"/>
    </select>
</form>

<?php
if(isset($_GET['filename']) && $_GET['filename'] && file_exists($_GET['filename']))
{

    $filename = $_GET['filename'];
    if(isset($_POST['newcontent'])){
        file_put_contents($filename,$_POST['newcontent']);

    }
    $content = htmlentities(file_get_contents($filename));
}
    ?>
<form method="post">

    <textarea cols="50" rows="20" name="newcontent"><?=$content?></textarea>
    <input type="submit" />
</form>
