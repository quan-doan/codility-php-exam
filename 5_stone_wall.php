<?php

function stone_wall($H) {
    $N = count($H);
    $count = 0;
    $stack = array();
    $stack_num = 0;

    for ($i= 0; $i<$N; $i++) {
        while ($stack_num > 0 && $stack[$stack_num - 1] > $H[$i]) {
            $stack_num -= 1;
        }
        if ($stack_num > 0 && $stack[$stack_num - 1] == $H[$i]) {
            continue;
        }
        else {
            $count++;
            $stack[$stack_num] = $H[$i];
            $stack_num++;
        }
    }
    return $count;

}