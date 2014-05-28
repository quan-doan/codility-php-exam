<?php

function flog_river_one($X, $A) {
    $array = array();
    foreach ($A as $time => $position) {
        if ($position <= $X) {
            $array[$position] = true;
        }
        if (count($array) == $X) return $time;
    }
    return -1;
}