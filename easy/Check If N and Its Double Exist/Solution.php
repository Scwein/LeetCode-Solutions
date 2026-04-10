<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function checkIfExist($arr) {
        $map = [];

        foreach($arr as $num) {
            if(isset($map[$num * 2]) || ($num % 2 == 0 && isset($map[$num / 2]))) {
                return true;
            }
            $map[$num] = true;
        }
        return false;
    }
}