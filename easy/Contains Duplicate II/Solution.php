<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function containsNearbyDuplicate($nums, $k) {
        $window = [];
        
        for ($i = 0; $i < count($nums); $i++) {
            if (isset($window[$nums[$i]])) {
                return true;
            }
            
            $window[$nums[$i]] = true;
            
            if (count($window) > $k) {
                unset($window[$nums[$i - $k]]);
            }
        }
        
        return false;
    }
}