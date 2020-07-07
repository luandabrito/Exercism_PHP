<?php

function toRna ($dna): string {
    $rna;

    for($i = 0; $i < strlen($dna); $i++) {
        switch ($dna[$i]){
            case 'G':
                $rna[$i] = 'C';
                break;
            case 'C':
                $rna[$i] = 'G';
                break;
            case 'T':
                $rna[$i] = 'A';
                break;
            case 'A':
                $rna[$i] = 'U';
                break;
        }
    }

    return join($rna);
}
