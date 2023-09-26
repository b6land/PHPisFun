<?php
class Solution {

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function multiply($num1, $num2) {
        if($num1 == "0" || $num2 == "0"){
            return "0";
        }

        $arr = array();
        for($i = strlen($num1) - 1;$i >= 0;$i--){
            for($j = strlen($num2) - 1;$j >= 0;$j--){
                $t = (int)$num1[$i] * (int)$num2[$j];
                $arr[$i + $j] += $t;
            }

            for($j = count($arr) - 1;$j > 0;$j--){
                if($arr[$j] > 9){
                    $arr[$j - 1] += (int)($arr[$j] / 10);
                    $arr[$j] = $arr[$j] % 10;
                }
            }
        }

        $str = "";
        for($i = 0;$i < count($arr);$i++){
            $str = $str . $arr[$i];
        }

        return $str;
    }
}
?>