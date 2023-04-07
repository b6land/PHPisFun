<?php 
class Solution {

/**
 * @param String[] $strs
 * @return String
 */
function longestCommonPrefix($strs) {
    $shortest_str = "";
    $min_len = 999;
    for($j = 0;$j < count($strs);$j++){
        if(strlen($strs[$j]) <= $min_len){
            $min_len = strlen($strs[$j]);
            $shortest_str = $strs[$j];
        }
    }

    $common = "";
    for($i = 0;$i < $min_len;$i++){
        $j = 0;
        for(;$j < count($strs);$j++){
            if($strs[$j][$i] != $shortest_str[$i]){
                break;
            }
        }

        if($j == count($strs)){
            $common = substr($shortest_str, 0, $i + 1);
        }
        else{
            break;
        }
    }

    return $common;
}
}
?>