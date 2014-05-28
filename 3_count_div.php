<?php

function count_div($A, $B, $K) {
    // write your code in PHP5
    if ($A % $K == 0) return intval(floor(($B - $A)/$K)) + 1;
    else return intval(floor(($B-($A - $A % $K))/$K));
}