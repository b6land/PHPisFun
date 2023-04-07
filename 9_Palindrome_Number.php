<?php 
class Solution {

/**
 * @param Integer $x
 * @return Boolean
 */
function isPalindrome($x) {
    $str_x = strval($x);
    $str_x_reverse = strrev($str_x);
    if($str_x == $str_x_reverse)
    {
        return true;
    }
    return false;
}
}

?>