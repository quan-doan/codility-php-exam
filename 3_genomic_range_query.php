<?php

function genomic_range_query($S, $P, $Q) {
    $S    = str_split($S);
    $N    = count($S);
    $M    = count($P);
    $arr    = array();
    $result = array();
    for($i = 0; $i < $N; $i++){
        $arr[$i] = array_fill(0, 4, 0);;
        switch($S[$i]){
            case 'A':
                $arr[$i][0] = 1;
                break;
            case 'C':
                $arr[$i][1] = 1;
                break;
            case 'G':
                $arr[$i][2] = 1;
                break;
            default:
                $arr[$i][3] = 1;
                break;
        }
    }
    for($i = 1; $i < $N; $i++){
        for($j = 0; $j < 4; $j++){
            $arr[$i][$j] += $arr[$i - 1][$j];
        }
    }
    for($i = 0; $i < $M; $i++){
        $p = $P[$i];
        $q = $Q[$i];
        for($a = 0; $a < 4; $a++){
            $sub = 0;
            if($p - 1 >= 0){
                $sub = $arr[$p - 1][$a];
            }
            if($arr[$q][$a] - $sub > 0){
                $result[$i] = $a + 1;
                break;
            }
        }
    }
    return $result;

}