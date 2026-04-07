<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        if ($n == 1) {
            return 1;
        }
        
        $dp = array_fill(0, $n, 0);
        $dp[0] = 1;
        $dp[1] = 2;

        for ($i = 2; $i < $n; $i++) {
            $dp[$i] = $dp[$i - 1] + $dp[$i - 2];
        }

        return $dp[$n - 1];
    }
}