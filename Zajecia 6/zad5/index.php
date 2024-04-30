<?php
function pangram ($line) {
    $line = strtoupper($line);
    for ($i = 65; $i <= 90; $i++) {
        if (!str_contains($line, chr($i))) return false;
    }
    return true;
}
$line = readline();
echo (int)pangram($line);
?>
