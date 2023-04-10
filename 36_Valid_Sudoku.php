<?php
class Solution {

    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board) {
        for($r = 0;$r < 9;$r++){ // check column
            $col_valid = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
            for($c = 0;$c < 9;$c++){
                $num = (int)$board[$r][$c];
                if($num < 1){ // except empty
                    continue;
                }
                $col_valid[$num] += 1;
                if($col_valid[$num] > 1){ // repeated
                    return false;
                }
            }
        }

        for($c = 0;$c < 9;$c++){ // check row
            $row_valid = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
            for($r = 0;$r < 9;$r++){
                $num = (int)$board[$r][$c];
                if($num < 1){ // except empty
                    continue;
                }
                $row_valid[$num] += 1;
                if($row_valid[$num] > 1){ // repeated
                    return false;
                }
            }
        }

        for($i = 0;$i < 9;$i+=3){ // check sub-box
            for($j = 0;$j < 9;$j+=3){
                $sub_valid = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);    
                for($r = $i + 0;$r < $i + 3;$r++){
                    for($c = $j + 0;$c < $j + 3;$c++){
                        $num = (int)$board[$r][$c];
                        if($num < 1){ // except empty
                            continue;
                        }
                        $sub_valid[$num] += 1;
                        if($sub_valid[$num] > 1){ // repeated
                            return false;
                        }
                    }
                }                
            }
        }

        return true;
    }
}
?>