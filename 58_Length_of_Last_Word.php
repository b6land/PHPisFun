<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $n = strlen($s);
        
        while($s[$n - 1] == ' '){
            $n--;
        }

        for($i = $n - 1;$i >= 0;$i--){
            if($s[$i] == ' '){
                return ($n - $i - 1);
            }
        }

        return $n;
    }
}
?>