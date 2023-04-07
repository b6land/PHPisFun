<?php 
class Solution {

/**
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(&$nums) {
    $len = count($nums);
    $n = $nums[0];
    $n_index = 1;
    for($i = 0;$i < $len;$i++){
        if($nums[$i] == $n){
            continue;
        }
        $nums[$n_index] = $nums[$i];

        $n = $nums[$i];
        $n_index += 1;
    }

    return $n_index;
}
}
?>