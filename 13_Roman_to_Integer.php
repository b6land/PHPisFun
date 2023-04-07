<?php 
class Solution {

/**
 * @param String $s
 * @return Integer
 */
function romanToInt($s) {
    $len = strlen($s);
    $num = 0;
    for($i = 0;$i < $len;$i++){
        if($i < $len - 1){
            if($s[$i] == 'I' && $s[$i + 1] == 'V'){
                $num += 4;
                $i++;
                continue;
            }
            else if($s[$i] == 'I' && $s[$i + 1] == 'X'){
                $num += 9;
                $i++;
                continue;
            }
            else if($s[$i] == 'X' && $s[$i + 1] == 'L'){
                $num += 40;
                $i++;
                continue;
            }
            else if($s[$i] == 'X' && $s[$i + 1] == 'C'){
                $num += 90;
                $i++;
                continue;
            }
            else if($s[$i] == 'C' && $s[$i + 1] == 'D'){
                $num += 400;
                $i++;
                continue;
            }
            else if($s[$i] == 'C' && $s[$i + 1] == 'M'){
                $num += 900;
                $i++;
                continue;
            }
        }
        if($s[$i] == 'M'){
            $num += 1000;
        }
        else if($s[$i] == 'D'){
            $num += 500;
        }
        else if($s[$i] == 'C'){
            $num += 100;
        }
        else if($s[$i] == 'L'){
            $num += 50;
        }
        else if($s[$i] == 'X'){
            $num += 10;
        }
        else if($s[$i] == 'V'){
            $num += 5;
        }
        else if($s[$i] == 'I'){
            $num += 1;
        }
    }
    return $num;
}
}
?>