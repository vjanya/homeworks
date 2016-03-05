<?php
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $filename = "pages/{$page}.php";
?>
<html>
<head>
    <title>Mini Site</title>
</head>
<body>

<?php include("menu.php"); ?>

<br>
<?php
    if (!file_exists($filename)){
        die('Wrong page');
    }
    require $filename;
?>
<br>

<?php include("footer.php"); ?>

</body>
</html>