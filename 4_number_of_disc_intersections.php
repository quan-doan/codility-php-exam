<?php
function intersection($A) {
    $count = count($A);
    $upper_array = array();
    $lower_array = array();
    for ($i=0; $i<$count; $i++) {
        $upper_array[] = $i + $A[$i];
        $lower_array[] = $i - $A[$i];
    }
    sort($upper_array);
    sort($lower_array);

    $result_count = 0;
    $lower_index = 0;
    for ($upper_index=0; $upper_index < $count; $upper_index++) {
        while ($lower_index < $count && $upper_array[$upper_index] >= $lower_array[$lower_index]) {
            $lower_index++;
        }
        //excude disc_center - disc_radius <= current_center + current_radius
        #    AND
        #    disc_center + disc_radius <= current_center + current_radius
        $result_count += $lower_index - $upper_index - 1;
    }
    if ($result_count > 10000000) return -1;
    return $result_count;
}