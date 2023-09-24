<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $nCount = count($nums);
        for($i = 0;$i < $nCount; $i++) {
            if($nums[$i] >= $target){
                return $i;
            }
        }
        return $nCount;
    }
}
?>