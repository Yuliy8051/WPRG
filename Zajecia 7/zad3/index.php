<?php
function f($a, $b, $c, $d) {
    $array1 = range($a, $b);
    $array2 = range($c, $d);
    $array1 = array_flip($array1);
    for ($i = $a; $i <= $b; $i++) {
        $array1[$i] = $array2[$i - $a];
    }
    return $array1;
}
fscanf(STDIN, '%d %d %d %d', $a, $b, $c, $d);
print_r(f($a, $b, $c, $d));
?>