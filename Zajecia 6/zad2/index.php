<?php
function suma($a, $roznicaIloraz, $n){
    $arytmetyczna = (2 * $a + $roznicaIloraz * ($n - 1)) * $n / 2;
    echo $arytmetyczna . "\n";
    $geometryczna = $a * (pow($roznicaIloraz, $n) - 1) / ($roznicaIloraz - 1);
    echo $geometryczna . "\n";
}
fscanf(STDIN, "%d %d %d", $a, $roznicaIloraz, $n);
suma($a, $roznicaIloraz, $n);
?>