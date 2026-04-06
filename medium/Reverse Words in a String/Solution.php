<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $s = trim($s);
        $s = explode(' ', $s);
        $res = '';
        for ($i = count($s) - 1; $i >= 0; $i--) {
            if ($s[$i] != '') {
                $res .= $s[$i] . ' ';
            }
        }
        return rtrim($res);
    }
}