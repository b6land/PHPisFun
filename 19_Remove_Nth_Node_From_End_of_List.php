<?php
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {

        $count_node = $head;
        $count = 1;
        while($count_node->next != null){
            $count_node = $count_node->next;
            $count++;
        }

        if($n == 1 && $count == 1){
            return ;
        }
        else if($n == $count){
            return $head->next;
        }

        $start_n = $count - $n;
        $node = $head;
        for($i = 0;$i < $start_n - 1;$i++){
            $node = $node->next;
        }

        $removed = $node->next;
        $next = $removed->next;
        $node->next = $next;

        return $head;
    }
?>