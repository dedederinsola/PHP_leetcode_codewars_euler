<?php

//Definition for a binary tree node.
class TreeNode {
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}
 
class Solution {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isEvenOddTree($root) {
        if ($root === null) {
            return true;
        }

        $queue = new SplQueue();
        $queue->enqueue([$root, 0]); 

        $lastValues = []; 

        while (!$queue->isEmpty()) {
            [$node, $level] = $queue->dequeue();

            $isLevelEven = $level % 2 == 0;

            if ($isLevelEven && $node->val % 2 == 0 || !$isLevelEven && $node->val % 2 != 0) {
                return false; 
            }

            if (isset($lastValues[$level])) {
                if ($isLevelEven && $node->val <= $lastValues[$level] || !$isLevelEven && $node->val >= $lastValues[$level]) {
                    return false;
                }
            }
            $lastValues[$level] = $node->val;

            if ($node->left !== null) {
                $queue->enqueue([$node->left, $level + 1]);
            }
            if ($node->right !== null) {
                $queue->enqueue([$node->right, $level + 1]);
            }
        }

        return true; 
    }

    
}
        
    

