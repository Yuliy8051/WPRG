<?php
$_SERVER['PHP_AUTH_USER'] = 'admin';
$_SERVER['PHP_AUTH_PW'] = 'password1';
$authOK = false;
$user = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];
if (isset($user) && isset($password) && $user === 'admin' && $password === 'password') {
    $authOK = true;
}
if (!$authOK) {
    header('WWW-Authenticate: Basic realm="Top Secret Files"');
    header('HTTP/1.0 401 Unauthorized');
    echo "No auth";
    exit;
}
?>
