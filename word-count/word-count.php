<?php

function wordCount($phrase) {
    $caracter = ['!', '&', '@', '$' , '%', '^', ',', '#', ':', ';', '.', '*'];
    $caracter2 = ["\n", "\t", "  "];
    $phrase = strtolower(str_ireplace($caracter,'',$phrase));
    $phrase = str_replace($caracter2,' ',$phrase);
    $phraseArray = explode(' ', $phrase);
    $result = [];

    foreach($phraseArray as $word) {
        if (!in_array($word, $result)){
            $result[$word] = substr_count($phrase, $word);
        }
        
    }
    return $result;
}