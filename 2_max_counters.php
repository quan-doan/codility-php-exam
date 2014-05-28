<?
function max_counters($N, $A) {
    // write your code in PHP5
    $result = array();
    $max = 0;
    $last_max = 0;
    for($i=0; $i<$N;$i++) {
        $result[] = 0;
    }

    for($j=0; $j<count($A); $j++) {
        if ($A[$j] >=1 && $A[$j] <=$N) {
            $counter = $result[$A[$j]-1];
            if ($counter < $last_max) $counter = $last_max;
            $result[$A[$j]-1] = $counter + 1;
            if ($counter + 1 > $max) $max = $counter + 1;
        }
        if ($A[$j] == $N+1) {
            $last_max = $max;
        }
    }

    for($i=0; $i < count($result); $i++) {
        $result[$i] = ($result[$i] < $last_max) ? $last_max : $result[$i];
    }

    return $result;
}