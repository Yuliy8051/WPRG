<?php
function sum($num) {
    $sum = 0;
    while ($sum < 10){
        for ($i = 0; $i < strlen($num); $i++) {
            $sum += (int)$num[$i];
            if ($sum >= 10) break;
        }
    }
    return $sum;
}
$num = readline();
 echo sum($num);
?>
