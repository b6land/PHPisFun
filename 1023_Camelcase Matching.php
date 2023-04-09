<?php
class Solution {

    /**
     * @param String[] $queries
     * @param String $pattern
     * @return Boolean[]
     */
    function camelMatch($queries, $pattern) {
        $ans = array();
        $pattern_len = strlen($pattern);
        for($q = 0;$q < count($queries);$q++){
            $i = 0;
            $j = 0;
            $query = $queries[$q];

            while ($i < strlen($query)){
                if($query[$i] == $pattern[$j]){
                    $i++;
                    $j++;
                }
                elseif($query[$i] < 'a'){
                    $j = -1;
                    break;
                }
                else{
                    $i++;
                }
            }

            if($j == $pattern_len){
                array_push($ans, true);
            }
            else{
                array_push($ans, false);
            }
        }

        return $ans;
    }
} 
?>