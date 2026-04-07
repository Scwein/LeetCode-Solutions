<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function sortColors(&$nums) {
        $low = 0;
        $mid = 0;
        $high = count($nums) - 1;
        
        while ($mid <= $high) {
            if ($nums[$mid] == 0) {
                $temp = $nums[$low];
                $nums[$low] = $nums[$mid];
                $nums[$mid] = $temp;
                $low++;
                $mid++;
            } elseif ($nums[$mid] == 1) {
                $mid++;
            } else {
                $temp = $nums[$high];
                $nums[$high] = $nums[$mid];
                $nums[$mid] = $temp;
                $high--;
            }
        }
    }
}