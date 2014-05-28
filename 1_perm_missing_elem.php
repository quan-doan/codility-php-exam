<?php

function find_missing_elem($A) {
    $N = count($A);
    $sum = ($N + 1)*($N + 2) / 2;

    for ($i=0; $i<$N; $i++) {
        $sum -= $A[$i];
    }

    return intval($sum);
}