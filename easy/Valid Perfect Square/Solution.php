<?php

class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPerfectSquare($num) {
        if ($num == 1) {
            return true;
        }
        
        $l = 1;
        $r = $num;

        while ($r - $l > 1) {
            $m = intdiv($l + $r, 2);
            $square = $m * $m;
            if ($square == $num) {
                return true;
            } elseif ($square < $num) {
                $l = $m;
            } else {
                $r = $m;
            }
        }
        return false;
        
    }
}