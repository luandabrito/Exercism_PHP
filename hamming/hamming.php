<?php

function distance(string $strandA, string $strandB) : int
{
    $soma = 0;
    
    if (strlen($strandA) === strlen($strandB)){
        for($i = 0; $i < strlen($strandA); $i++) {
            if ($strandA[$i] === $strandB[$i]) {
                $soma++;
            }
        }
        return $soma;
    } else {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }
}