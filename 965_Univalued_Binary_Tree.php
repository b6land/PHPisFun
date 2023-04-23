<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isUnivalTree($root) {
        return $this->visit($root); // 用 $this 存取同一類別內的 function, property
    }

    function visit($node){
        $result = true;

        if($node->left != null){
            if($node->val != $node->left->val){
                return false;
            }
            $result = $result & $this->visit($node->left);
        }
        
        if($node->right != null){
            if($node->val != $node->right->val){
                return false;
            }
            $result = $result & $this->visit($node->right);
        }

        return $result;
    }
}
?>