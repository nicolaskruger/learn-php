<?php

/*
 * Complete the 'beautifulTriplets' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER d
 *  2. INTEGER_ARRAY arr
 */



function beautifulTriplets(int $d,array $arr)
{
    // Write your code here
    $count=0;
    $set = array_unique($arr);
    $map = [];
    foreach ($set as $value) {
        $map[$value] = true;
    }
    foreach ($arr as $val) {
        if($map[$val+$d]&&$map[$val+$d*2])
            $count++;
    }
    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$d = intval($first_multiple_input[1]);

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = beautifulTriplets($d, $arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
