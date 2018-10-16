<?php

function quickSort(array $array)
{
    if (count($array) <= 1) {
        return $array;
    }

    $pivot = array_shift($array);
    $middle = [$pivot];
    $left = [];
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
