<?php

/**
 * @param array $array
 * @return array
 */
function quick_sort (array $array) {
    if (count($array) < 2) {
        return $array;
    }
    else {
        $pivot = array_shift($array);

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

print_r(quick_sort([1,5,7,23,8,5,10,4,3,2,35,76,45,13,89,23,356]));
