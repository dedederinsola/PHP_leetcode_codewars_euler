<?php
class Solution {

/**
 * @param string $s
 * @return string
 */
function maximumOddBinaryNumber($s) {
    $case = str_split($s);

    $freq = array_count_values($case);

    $odd = '';

    foreach ($case as $num){
        while ($freq['1'] > 1){
            $odd .= '1';
            $freq[1] -= 1;
        }
        while ($freq['0'] > 0){
            $odd .= '0';
            $freq[0] -= 1;
        } 
    }
    $odd .= '1';

    return $odd;

}

}
