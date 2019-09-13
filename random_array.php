<?php
$array = [];
$elements = 10000;
while ($elements) {
    $array[] = rand(0, 10000);
    $elements--;
}

return $array;