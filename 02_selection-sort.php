<?php

function findMin($array) {
    $min_index = 0;

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] < $array[$min_index] ) {
            $min_index = $i;
        }
    }
    return $min_index;
}

function selectionSort(&$array) {
    $return = [];

    while (count($array)) {
        $min = findMin($array);
        $return[] = $array[$min];
        array_splice($array, $min, 1);
    }

    return $return;
}

$array = [1,2,4,7,-5,8];
var_dump(selectionSort($array)) ;