<?php 
class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target) {
    for($i = 0;$i < count($nums);$i++){
        for($j = $i + 1;$j < count($nums);$j++){
            if($nums[$i] + $nums[$j] == $target){
                $ans = array($i, $j);
                return $ans;
            }
        }
    }
}
}

?>