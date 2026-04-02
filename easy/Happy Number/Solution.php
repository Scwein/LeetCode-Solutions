<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        $seen = [];
        
        while (true) {
            $sum = 0;
            $s = (string) $n;
            
            for ($i = 0; $i < strlen($s); $i++) {
                $sum += $s[$i]**2;
            }
            
            if ($sum == 1) {
                return true;
            }
            if ($seen[$sum]) {
                return false;
            }
            
            $seen[$sum] = true;
            $n = $sum;
        }
    }
}