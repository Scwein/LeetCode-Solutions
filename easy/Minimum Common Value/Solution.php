<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer
     */
    function getCommon($nums1, $nums2) {
        $p1 = 0;
        $p2 = 0;

        while ($p1 < count($nums1) && $p2 < count($nums2)) {
            if ($nums1[$p1] == $nums2[$p2]) {
                return $nums1[$p1];
            } elseif ($nums1[$p1] < $nums2[$p2]) {
                $p1++;
            } else {
                $p2++;
            }
        }
        return -1;
    }
}