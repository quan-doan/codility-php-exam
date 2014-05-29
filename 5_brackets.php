<?php
function brackets($S) {
    if (empty($S)) {
        return 1;
    }
    $pairs = array(
        '}' => '{',
        ')' => '(',
        ']' => '['
    );
    $to_push = array('{', '(', '[');
    $S = str_split($S);
    $stack = array();
    foreach($S as $char) {
        if (in_array($char, $to_push)){
            $stack[] = $char;
        }
        else {
            if (count($stack) == 0) return 0;
            if ($pairs[$char] !== array_pop($stack)) return 0;
        }
    }
    return empty($stack)? 1: 0;
}