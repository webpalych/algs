<?php
/**
 * Created by PhpStorm.
 * User: Palych
 * Date: 19.10.2018
 * Time: 14:39
 */

function binary_search($list, $needle) {
    $low = 0;
    $high = count($list) - 1;
    $i = 1;

    if ($needle < $list[$low] || $needle > $list[$high]) {
        return false;
    }

    while ($low <= $high) {
        $mid = round(($low + $high) / 2, 0, PHP_ROUND_HALF_DOWN);
        $guess = $list[$mid];

        echo "Try #$i \n";

        if ($guess == $needle) {
            return $mid;
        }

        if ($guess > $needle) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }

        $i++;
    }
    return false;
}


$haystack = [2,4,5,7,8,9,12,15,18,22,67,78,87,125,656,745,765,800];

echo binary_search($haystack, 800);