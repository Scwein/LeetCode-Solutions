<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        $l = 0;
        $r = $x;

        while ($l <= $r) {
            $m = $l + intdiv($r - $l, 2);
            $square = $m * $m;
            
            if ($square == $x) {
                return $m;
            } elseif ($square < $x) {
                $l = $m + 1;
            } else {
                $r = $m - 1;
            }
        }
        return $r;
    }
}