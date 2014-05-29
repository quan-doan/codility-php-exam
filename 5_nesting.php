<?php
function netstings($S) {
    if (empty($S)) return 1;
    $pair = array(
        ')' => '('
    );
    $stack = array();
    $S = str_split($S);
    foreach ($S as $char) {
        if ($char !== ')') {
            //push into stack
            $stack[] = $char;
        } else {
            if (!count($stack)) return 0;
            if ($pair[$char] !== array_pop($stack)) {
                return 0;
            }
        }
    }
    return !count($stack)? 1: 0;
}