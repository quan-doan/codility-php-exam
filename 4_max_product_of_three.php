<?php
function max_product_of_three($A) {
    sort($A);
    $array[] = $A[0]*$A[1]*$A[2];
    $array[] = $A[0]*$A[1]*$A[count($A) - 1];
    $array[] = $A[0]*$A[count($A) - 1]*$A[count($A) - 2];
    $array[] = $A[count($A) - 1]*$A[count($A) - 2]*$A[count($A) - 3];
    return max($array);
}