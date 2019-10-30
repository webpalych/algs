<?php
$array = include __DIR__ . '/random_array.php';

$time_start = microtime(true);
/**
 * @param array $array
 * @return array
 */
function quick_sort (array $array) {
    if (count($array) < 2) {
        return $array;
    }
    else {
        //$pivot = array_shift($array);
        $pivot_index = intval(count($array)/2);
        $pivot = $array[$pivot_index];
        unset($array[$pivot_index]);

        $less = [];
        $greater = [];

        foreach ($array as $item) {
            if ( $item <= $pivot ) {
                $less[] = $item;
            } else {
                $greater[] = $item;
            }
        }

        return array_merge(quick_sort($less), [$pivot], quick_sort($greater));
    }
}

quick_sort($array);

$time_end = microtime(true);

$execution_time = ($time_end - $time_start);

//execution time of the script
echo 'Total Execution Time: '.$execution_time.' secs';