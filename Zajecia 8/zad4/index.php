<?php
$a = readline();
$b = "/[aeiou]/i";
$c = 0;
for ($i = 0; $i < strlen($a); $i++) {
    if (preg_match($b, $a[$i]))$c++;
}
echo $c;