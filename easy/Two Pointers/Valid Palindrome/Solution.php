<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */

    function isPalindrome($s) {
        $s = strtolower($s);
        $s = preg_replace('#[^a-zA-Z0-9]#', '', $s);
        
        $len = strlen($s);
        $p1 = 0;
        $p2 = $len - 1;
        
        while ($p1 < $p2) {
            if ($s[$p1] != $s[$p2]) {
                return false;
            }
            else {
                $p1 += 1;
                $p2 -= 1;
            }
        }
        return true;
    }
}