<?php

function sumIntegers(array $tab): int
{
    $emptyError = "Array cannot be empty";
    $typeError = "Values of the array should be of type integer";

    if (empty($tab)) {
        echo $emptyError . "\n";
        return -1;
    }

    foreach ($tab as $value) {
        if (!is_int($value)) {
            echo $typeError . "\n";
            return -1;
        }
    }

    return array_reduce(
        $tab,
        fn (int $carry, int $item): int => $carry + $item,
        0
    );
}