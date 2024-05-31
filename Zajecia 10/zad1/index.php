<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (!isset($_COOKIE['visits'])){
    $visits = 1;
    setcookie('visits', $visits, time() + 60 * 60 * 24);
}
else if (isset($_POST["reset"])){
    $visits = 1;
    setcookie('visits', $visits, time() + 60 * 60 * 24);
    header("location:index.php");
}
else{
    $visits = $_COOKIE['visits'];
    setcookie('visits', $visits + 1, time() + 60 * 60 * 24);
}

?>
<p>masz <?php echo $_COOKIE['visits']?> odwiedzin</p>
<form method="post">
    <input type="submit" name="reset" value="reset">
</form>
</body>
</html>