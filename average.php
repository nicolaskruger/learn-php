<?php

function betterThanAverage(array $classPoints, int $yourPoints): bool
{
    $average = array_sum($classPoints)/count($classPoints); 
    return $yourPoints> $average; // Your code here
}
