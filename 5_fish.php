<?php

function fish($A, $B) {
    $N = count($A);
    $result = 0;
    $down_stream = array();
    $down_stream_count = 0;
    for($i=0; $i<$N; $i++) {
        if ($B[$i] == 1) {
            $down_stream[] = $A[$i];
            $down_stream_count++;
        } else {
            while($down_stream_count != 0) {
                if ($down_stream[count($down_stream) - 1] < $A[$i]) {
                    $down_stream_count--;
                    array_pop($down_stream);
                } else {
                    break;
                }
            }
            if ($down_stream_count == 0) {
                $result++;
            }
        }
    }
    return $result+count($down_stream);
}