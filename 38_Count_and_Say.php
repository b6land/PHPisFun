<?php
class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function countAndSay($n) {
        $str = '1';
        for($i = 2;$i <= $n;$i++){
            $new_str = '';
            $s_count = 0;
            $s_n = $str[0];
            for($j = 0;$j < strlen($str);$j++){
                if($str[$j] == $s_n){
                    $s_count++;
                }
                else{
                    $new_str = $new_str . strval($s_count) . strval($s_n);
                    $s_count = 1;
                    $s_n = $str[$j];
                }
            }
            $new_str = $new_str . strval($s_count) . strval($s_n);
            $str = $new_str;
        }
        return $str;
    }

    
}
?>