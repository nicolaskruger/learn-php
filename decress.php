<?php


// function reverseSeq(int $n): array
// {
//     if ($n === 0) return [];
//     return [$n, ...reverseSeq($n-1)]; // your code here
// };

function reverseSeq(int $n): array
{
    $arr = [];
    for ($i=$n; $i > 0 ; $i--) { 
        # code...
        $arr[] = $i;
    }
    return $arr;
};

// function reverseSeq($n)
// {
//     return range($n, 1);
// };