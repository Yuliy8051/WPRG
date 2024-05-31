<?php
session_start();
$file = fopen('users', 'r');
$_POST['email'] = strtolower($_POST['email']);
$i = 0;
$is_correct = false;
while ($str = fgets($file)){
    $i++;
    if ($i % 4 == 3) $email = trim($str);
    else if ($i % 4 == 0){
        $password = trim($str);
        if ("email: ".$_POST['email'] == $email && "password: ".$_POST['password'] == $password)
            $is_correct = true;
    }
}
if ($is_correct){
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    header("Location: good.html");
}
else{
    include "login.html";
    echo "<br>";
    echo "Login lub hasło jest błędne!";
}
fclose($file);
?>