<?php
session_start();
$login = "login1";
$password = "password1";
if ($_POST["login"] == $login && $_POST['password'] == $password){
    $_SESSION['is_logged'] = true;
    header("Location: good.html");
}
else{
    $_SESSION['is_logged'] = false;
    header("Location: bad.html");
}
?>