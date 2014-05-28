<?php
function triangle($A){
    sort($A);
    for($i=0;$i<count($A) - 2;$i++) {
        if ($A[$i] + $A[$i+1] > $A[$i+2] && $A[$i] + $A[$i+2] > $A[$i+1] && $A[$i+1] + $A[$i+2] > $A[$i+1] ) {
            return 1;
        }
    }
    return 0;
}