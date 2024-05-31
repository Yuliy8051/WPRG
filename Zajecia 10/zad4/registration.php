<?php
$pattern = "/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*(),.?:{}|<>])[A-Za-z\d!@#$%^&*(),.?:{}|<>]{6,}$/";
if (!preg_match($pattern, $_POST['password'])){
    include "registration.html";
    echo "Hasło powinno składać się z co najmniej 6 znaków, zawierać co najmniej 1 wielką literę, cyfrę oraz znak specjalny";
}
else{
    $file = fopen('users', 'a+');
    $_POST['email'] = strtolower($_POST['email']);
    $does_exist = false;
    while ($str = fgets($file)){
        if (trim($str) == ('email: denn8051@gmail.com'))
            $does_exist = true;
    }
    if ($does_exist)
        echo "ten email już jest zajęty";
    else {
        $information = <<< END
name: {$_POST['name']}
surname: {$_POST['surname']}
email: {$_POST['email']}
password: {$_POST['password']}

END;
        fwrite($file, $information);
    }
    fclose($file);
    header("Location: login.html");
}
?>