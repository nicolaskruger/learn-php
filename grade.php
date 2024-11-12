<?php
function getGrade(float $a,float $b,float $c): string {
// your code here
    $grades = [$a, $b, $c];
    $average = array_reduce($grades, function (float $score, float $grade) {return $score + $grade;}, 0)/count($grades);

    $result = [
        10 => "A",
        9  => "A",
        8  => "B",
        7  => "C",
        6  => "D"
    ];

    return $result[(int)($average/10)]??"F";
}