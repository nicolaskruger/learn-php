<?php

/*
 * Complete the 'kaprekarNumbers' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER p
 *  2. INTEGER q
 */

function kaprekarNumbers(int $p,int $q)
{
    $has = false;
    // Write your code here
    for ($i= $p; $i <= $q ; $i++) { 
        # code...
        $pow = $i*$i;
        $str = (string) $pow;
        $len = strlen($str) / 2;
        $sum = intval(substr($str, 0, $len)) + intval(substr($str, $len)); 
        if($sum === $i){
            print($i." ");
            $has = true;
        }
    }
    if(!$has){
        print("INVALID RANGE");
    }
}

$p = intval(trim(fgets(STDIN)));

$q = intval(trim(fgets(STDIN)));

kaprekarNumbers($p, $q);
