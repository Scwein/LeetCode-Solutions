<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $l = 0;
        $r = count($nums) - 1;

        while ($l <= $r) {
            $m = $l + intdiv($r - $l, 2);

            if ($nums[$m] == $target) {
                return $m;
            } elseif ($nums[$m] < $target) {
                $l = $m + 1;
            } else {
                $r = $m - 1;
            }
        }
        return $l;
    }
}