<?php

function invert(array $a): array
{
    return array_map(function ($val){return -$val;}, $a);
}
