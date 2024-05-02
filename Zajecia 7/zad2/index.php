<?php
function f($numbers, $n) {
    if ($n > sizeof($numbers) || $n < 0) return "BŁĄD";
    array_splice($numbers, $n, 0, '$');
    return $numbers;
}

$numbers = range(1, 100);
fscanf(STDIN, '%d', $n);
print_r(f($numbers, $n));
?>