<?php

function grow(array $a): int
{
    return array_reduce($a, function ($acc, $curr) {return $acc*$curr;}, 1);
}
