<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        if (count($nums) == 1) {
            return $nums[0];
        }
        sort($nums);
        $cnt = 1;
        $maxCnt = 1;

        for ($i = 1; $i < count($nums); $i++) {
            if ($nums[$i] == $nums[$i - 1]) {
                $cnt += 1;
            } else {
                if ($maxCnt < $cnt) {
                    $maxCnt = $cnt;
                    $num = $nums[$i - 1];
                }
                $cnt = 1;
            }
        }

        if ($cnt > $maxCnt) {
            $num = $nums[count($nums) - 1];
        }
        return $num;
    }
}