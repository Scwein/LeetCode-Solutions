<?php

class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    
    function reverseString(&$s) {
        $p1 = 0;
        $p2 = count($s) - 1;

        while ($p1 < $p2 + 1) {
            $temp = $s[$p1];
            $s[$p1] = $s[$p2];
            $s[$p2] = $temp;
            $p1 += 1;
            $p2 -= 1;
        }
    }
}