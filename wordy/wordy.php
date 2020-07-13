<?php

function calculate($sentence){
    $words = ['plus', 'minus', 'multiplied by', 'divided by', '?'];
    $caracter = ['+' , '-', '*', '/', ''];
    $sentence = explode(" ", str_replace($words, $caracter, $sentence));
    $result = 0;
    if (count($sentence) <= 5) {
        switch($sentence[3]){
            case '+':
                $result = $sentence[2] + end($sentence);
                break;
            case '-':
                $result = $sentence[2] - end($sentence);
                break;
            case '*':
                $result = $sentence[2] * end($sentence);
                break;
            case '/':
                $result = $sentence[2] / end($sentence);
                break;
            default:
                throw new InvalidArgumentException();
        }
        return $result;
    }

    if (count($sentence) > 5) {
        if ($sentence[3] === '+') {
            if ($sentence[5] === '+') {
                $result = ($sentence[2] + $sentence[4]) + end($sentence);
            }
            if ($sentence[5] === '-') {
                $result = ($sentence[2] + $sentence[4]) - end($sentence);
            }
            if ($sentence[5] === '*') {
                $result = ($sentence[2] + $sentence[4]) * end($sentence);
            }
            if ($sentence[5] === '/') {
                $result = ($sentence[2] + $sentence[4]) / end($sentence);
            }
        }
        if ($sentence[3] === '-') {
            if ($sentence[5] === '+') {
                $result = ($sentence[2] - $sentence[4]) + end($sentence);
            }
            if ($sentence[5] === '-') {
                $result = ($sentence[2] - $sentence[4]) - end($sentence);
            }
            if ($sentence[5] === '*') {
                $result = ($sentence[2] - $sentence[4]) * end($sentence);
            }
            if ($sentence[5] === '/') {
                $result = ($sentence[2] - $sentence[4]) / end($sentence);
            }
        }
        if ($sentence[3] === '*') {
            if ($sentence[5] === '+') {
                $result = ($sentence[2] * $sentence[4]) + end($sentence);
            }
            if ($sentence[5] === '-') {
                $result = ($sentence[2] * $sentence[4]) - end($sentence);
            }
            if ($sentence[5] === '*') {
                $result = ($sentence[2] * $sentence[4]) * end($sentence);
            }
            if ($sentence[5] === '/') {
                $result = ($sentence[2] * $sentence[4]) / end($sentence);
            }
        }
        if ($sentence[3] === '/') {
            if ($sentence[5] === '+') {
                $result = ($sentence[2] / $sentence[4]) + end($sentence);
            }
            if ($sentence[5] === '-') {
                $result = ($sentence[2] / $sentence[4]) - end($sentence);
            }
            if ($sentence[5] === '*') {
                $result = ($sentence[2] / $sentence[4]) * end($sentence);
            }
            if ($sentence[5] === '/') {
                $result = ($sentence[2] / $sentence[4]) / end($sentence);
            }
        }
        return $result;
    }
}