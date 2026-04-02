<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    
    function moveZeroes(&$nums) {
        $slow = 0;
        $fast = 0;

        while ($fast < count($nums)) {
            if ($nums[$fast] != 0) {
                $temp = $nums[$fast];
                $nums[$fast] = $nums[$slow];
                $nums[$slow] = $temp;
                $slow += 1;
            }
            $fast += 1;
        }
    }
}