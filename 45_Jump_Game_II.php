<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function jump($nums) {
        $n = count($nums);
        $count = 0;
        $step = 0;
        $next = 0;
        $last = 0;
        while($step < $n - 1)
        {
            for($i = $last;$i <= $step;$i++)
            {
                if($i + $nums[$i] > $next)
                {
                    $next = $i + $nums[$i];
                }
            }
            $last = $step;
            $step = $next;
            $count++;
        }
        return $count;
    }
}
?>