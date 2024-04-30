<?php
function mnozenie ($macierz1, $macierz2) {
    $macierz3 = array(
        array(), array(), array(), array(), array()
    );
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 3; $j++) {
            for ($k = 0; $k < 4; $k++) {
                $macierz3[$i][$j] += $macierz1[$i][$k] * $macierz2[$k][$j];
            }
        }
    }
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $macierz3[$i][$j] . "\t";
        }
        echo "\n";
    }
}
$macierz1 = array(
    array(1,2,3,4),
    array(4,5,6,7),
    array(7,8,9,10),
    array(1,2,3,4),
    array(7,8,9,10)
);
$macierz2 = array(
    array(10,11,12),
    array(13,14,15),
    array(16,17,18),
    array(19,20,21),
);
mnozenie($macierz1, $macierz2);

?>
