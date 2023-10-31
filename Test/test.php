<?php

function sum(int $a, int $b): int
{
    $x = $a + $b;
    return $x + 1;
}

echo sum(4, 5);
