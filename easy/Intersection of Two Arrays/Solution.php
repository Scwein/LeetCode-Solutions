<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2) {
        $p1 = 0;
        $p2 = 0;
        sort($nums1);
        sort($nums2);
        $len1 = count($nums1);
        $len2 = count($nums2);
        $res = [];

        while ($p1 < $len1 && $p2 < $len2) {
            if ($nums1[$p1] == $nums2[$p2]) {
                $res[] = $nums1[$p1];
                $p1 += 1;
                $p2 += 1;
            }
            elseif ($nums1[$p1] < $nums2[$p2]) {
                $p1 += 1;
            }
            else {
                $p2 += 1;
            }
        }
        return array_unique($res);
    }
}