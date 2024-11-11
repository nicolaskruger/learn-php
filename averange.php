<?php
function find_average(array $array): float {
// Write your code here
    $size = count($array);
    if ($size == 0) return 0.0;
    return array_reduce($array, function ($acc, $curr) {return $acc + $curr;}, 0.0)/(count($array));
}