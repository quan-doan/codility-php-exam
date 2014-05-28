<?php

function flog($X, $Y, $D)
{
    return intval(ceil($Y-$X)/$D);
}