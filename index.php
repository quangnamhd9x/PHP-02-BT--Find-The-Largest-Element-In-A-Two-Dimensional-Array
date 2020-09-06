<?php

function findMax()
{
    $array = [[1, 2], [3, 9], [5, 6]];
    $max = $array[0][0];
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array); $j++) {
            if ($array[$i][$j] > $max){
                $max = $array[$i][$j];
            }
        }
    }
    return $max;
}
echo findMax();