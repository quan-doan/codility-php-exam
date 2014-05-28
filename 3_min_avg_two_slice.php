<?php

function min_avg_two_slice($A) {
    // write your code in PHP5
    $N = count($A);
    $min_value = ($A[0] + $A[1])/2.0;
    $min_position = 0;
    for($i=0; $i<$N-2; $i++) {
        if (($A[$i] + $A[$i+1]) /2 < $min_value) {
            $min_value = ($A[$i] + $A[$i+1]) /2;
            $min_position = $i;
        }
        if( ($A[$i] + $A[$i+1] + $A[$i+2])/3 < $min_value) {
            $min_value = ($A[$i] + $A[$i+1] + $A[$i+2])/3;
            $min_position = $i;
        }
    }

    if (($A[$N-2]+$A[$N-1])/2 < $min_value) {
        $min_value = ($A[$N-1]+$A[$N-2])/2;
        $min_position = $N-2;
    }
    return $min_position;
}