<?php

function distinct($A){
    return count(array_flip(array_flip($A)));
}