<?php

function passing_cars($A) {
// write your code in PHP5
    $count_zero = 0;
    $result = 0;

    for($i=0; $i<count($A); $i++) {
        if ($A[$i] == 0) {
            $result += count($A) - 1 - $i;
            $count_zero++;
        }
    }
    //remove duplicate (0, 0);
    $duplicate = 0;

    for ($i = 0; $i< $count_zero; $i++) {
        $duplicate += $i;
    }

    $result = $result - $duplicate;

    if ($result > 1000000000) return -1;

    return intval($result);
}