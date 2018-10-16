<?php

function quickSort(array $array)
{
    $len = count($array);

    if ($len <= 1) {
        return $array;
    }

    $pivot = $array[intval($len / 2)];
    $left = [];
    $middle = [];
    $right = [];

    foreach ($array as $value) {
        if ($value < $pivot) {
            $left[] = $value;
        } elseif ($value > $pivot) {
            $right[] = $value;
        } else {
            $middle[] = $value;
        }
    }

    return array_merge(quickSort($left), $middle, $right);
}

print_r(quickSort([3, 6 ,8, 10, 1, 2, 1]));
