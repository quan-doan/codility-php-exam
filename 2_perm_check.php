<?php

function perm_check($A) {
    $N = count($A);
    sort($A);

    for ($j=0; $j<$N; $j++) {
        if ($A[$j] !=  $j+1) return 0;
    }
    return 1;
}