<?php

function hero(int $bullets, int $dragons): bool
{
    $kills = (int)($bullets/2); // your code here
    return ($kills>= $dragons);
}
