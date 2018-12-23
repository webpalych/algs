<?php
/**
 * @param array $array
 * @return int|mixed
 */
function getArraySumm (array $array) {

    if (!count($array)) {
        return 0;
    }

    $temp = $array[0];
    array_splice($array, 0, 1);
    return $temp + getArraySumm($array);
}

/**
 * @param array $array
 * @return int
 */
function getArrayCount (array $array) {

    if (!count($array)) {
        return 0;
    }

    array_splice($array, 0, 1);
    return 1 + getArrayCount($array);
}

/**
 * @param int $n
 * @return int
 */
function factorial ($n) {

    if ($n == 1 || $n <=0) {
        return 1;
    }

    return $n * factorial($n-1);
}

echo getArraySumm([1,2,4,5,6,7,8,9,10]);
echo getArrayCount([1,'af',2,5,'awfwa',2]);
echo factorial(45);
