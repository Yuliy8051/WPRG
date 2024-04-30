<?php
function liczbyProste ($n) {
    for ($j = 1; $j <= $n; $j++) {
        $a = true;
        for ($i = 2; $i <= sqrt($j); $i++) {
            if ($j % $i == 0) {
                $a = false;
                break;
            }
        }
        if ($a) echo $j . " ";
    }
}

fscanf(STDIN, "%d %d", $a, $b);
fscanf(STDIN, "%d", $n);;
liczbyProste($n);
?>