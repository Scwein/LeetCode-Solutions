<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function magicalString($n) {
        $s = $this->build_magical_str($n);
        $cnt = 0;
        for ($i = 0; $i <$n; $i++) {
            if ($s[$i] == 1) {
                $cnt += 1;
            }
        }
        return $cnt;
    }
    
    private function build_magical_str($n) {
        $s = '122';
        for ($i = 2; $i < $n; $i++) {
            if ($s[$i] == '1') {
                if ($s[-1] == '1') {
                    $s .= '2';
                }
                else {
                    $s .= '1';
                }
            }
            if ($s[$i] == '2') {
                if ($s[-1] == '1') {
                    $s .= '22';
                }
                else {
                    $s .= '11';
                }
            }
        }
        return $s;
    }
}