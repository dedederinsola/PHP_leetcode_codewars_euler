<?php
class Solution {

/**
 * @param integer[] $nums
 * @return integer[]
 */
function sortedSquares($nums) {
    $newnum = [];
    foreach($nums as $num){
        $newnum[] = $num * $num;
    }

    sort($newnum);
    return $newnum;
}
}