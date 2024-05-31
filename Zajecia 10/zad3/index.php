<?php
session_start();
if (isset($_SESSION['is_logged']) && $_SESSION['is_logged']){
    include "good.html";
}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Logowanie</h1>
<form method="post" action="login.php">
    <label for="login">Login:</label>
    <input type="text" name="login" id="login" required>
    <br>
    <label for="password">Hasło</label>
    <input type="password" name="password" id="password" required>
    <br>
    <input type="submit" name="submit" id="submit">
</form>
</body>
</html>
<?php
}
?>