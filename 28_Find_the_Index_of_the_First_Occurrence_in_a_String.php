<?php
class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $pos = strpos($haystack, $needle);
        if($pos === false){ // 用三個等號判斷 true, false
            return -1;
        }
        return $pos;
    }
}
?>