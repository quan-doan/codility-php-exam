<?php

function tape_equilibrium($A) {

    $sum1   = $A[0];
    $sum2   = array_sum($A) - $sum1;
    $found  = array('index'=>0, 'abs' => abs($sum1 - $sum2));
    $c = count($A) - 1;
    $i = 1;
    while($i < $c){
        $sum1 += $A[$i];
        $sum2 -= $A[$i];
        $abs = abs($sum1 - $sum2);
        if($abs < $found['abs']){
            $found['index'] = $i;
            $found['abs'] = $abs;
        }
        $i++;
    }
    return $found['abs'];
}
