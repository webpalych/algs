<?php
$array = include __DIR__ . '/random_array.php';

$time_start = microtime(true);
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

selectionSort($array);

$time_end = microtime(true);

$execution_time = ($time_end - $time_start);

//execution time of the script
echo 'Total Execution Time: '.$execution_time.' secs';