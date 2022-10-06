<?php
//https://leetcode.com/problems/add-one-row-to-tree/
//Given the root of a binary tree and two integers val and depth, add a row of nodes with value val at the given depth depth.
class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

class TreeNodeSolution{
    /**
     * @param TreeNode $root
     * @param Integer $val
     * @param Integer $depth
     * @return TreeNode
     */
    function addOneRow($root, $val, $depth) {
        if ($depth === 1) {
            $newRoot = new TreeNode($val);
            $newRoot->left = $root;
            return $newRoot;
        }
        $this->addOneRowHelper($root, $val, $depth, 1);
        return $root;
    }

    /**
     * @param TreeNode $root
     * @param Integer $val
     * @param Integer $depth
     * @param Integer $currentDepth
     * @return NULL
     */
    private function addOneRowHelper($root, $val, $depth, $currentDepth) {
        if ($root === null) {
            return;
        }
        if ($currentDepth === $depth - 1) {
            $left = new TreeNode($val);
            $left->left = $root->left;
            $root->left = $left;
            $right = new TreeNode($val);
            $right->right = $root->right;
            $root->right = $right;
        } else {
            $this->addOneRowHelper($root->left, $val, $depth, $currentDepth + 1);
            $this->addOneRowHelper($root->right, $val, $depth, $currentDepth + 1);
        }
    }
}

$solution = new TreeNodeSolution();
$solution->addOneRow(new TreeNode(4, new TreeNode(2, new TreeNode(3), new TreeNode(1)), new TreeNode(6, new TreeNode(5))), 1, 2);
