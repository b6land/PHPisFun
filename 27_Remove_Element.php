<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $i = 0;
        $j = count($nums) - 1;
        while ($i <= $j){
            if($val == $nums[$i]){
                $nums[$i] = $nums[$j];
                $j--;
            }
            else{
                $i++;
            }
        }
        return $j + 1;
    }
}
?>