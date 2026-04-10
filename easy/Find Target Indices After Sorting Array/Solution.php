<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function targetIndices($nums, $target) {
        sort($nums);
        $res = [];
        foreach ($nums as $index => $num) {
            if ($num == $target) {
                $res[] = $index;
            }
        }
        return $res;
    }
}