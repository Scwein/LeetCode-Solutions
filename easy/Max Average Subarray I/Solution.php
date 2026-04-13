<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Float
     */
    function findMaxAverage($nums, $k) {
        $windowAvgSum = 0;
        for ($i = 0; $i < $k; $i++) {
            $windowAvgSum += $nums[$i];
        }

        $maxAvgSum = $windowAvgSum;
        
        for ($r = $k; $r < count($nums); $r++) {
            $l = $r - $k;
            $windowAvgSum += $nums[$r] - $nums[$l];
            if ($maxAvgSum < $windowAvgSum) {
                $maxAvgSum = $windowAvgSum;
            }
        }
        return $maxAvgSum / $k;
    }
}