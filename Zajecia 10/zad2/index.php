<?php
include "index.html";
$name = 'is_passed';
if (isset($_COOKIE[$name]))
    header("Location: passed.html");
else if (isset($_GET['submit'])){
    setcookie($name, 1, time() + 60);
    header("Location: dziekuje.html");
}
?>