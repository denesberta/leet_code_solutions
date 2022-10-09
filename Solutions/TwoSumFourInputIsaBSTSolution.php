<?php
//https://leetcode.com/problems/two-sum-iv-input-is-a-bst/
//Given the root of a Binary Search Tree and a target number k, return true if there exist two elements in the BST such that their sum is equal to the given target.

class TreeNode
{
    public $val = 0;
    public $left = null;
    public $right = null;

    public function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

class TwoSumFourInputIsaBSTSolution
{
    /**
     * @param TreeNode $root
     * @param Integer $k
     * @return Boolean
     */
    public function findTarget(TreeNode $root, int $k): bool
    {
        $set = [];
        return $this->findTargetHelper($root, $k, $set);
    }

    public function findTargetHelper($root, int $k, array &$set): bool
    {
        if ($root === null) {
            return false;
        }
        if (in_array($k - $root->val, $set, true)) {
            return true;
        }
        $set[] = $root->val;
        return $this->findTargetHelper($root->left, $k, $set) || $this->findTargetHelper($root->right, $k, $set);
    }
}

$root = new TreeNode(5);
$root->left = new TreeNode(3);
$root->right = new TreeNode(6);
$root->left->left = new TreeNode(2);
$root->left->right = new TreeNode(4);
$root->right->right = new TreeNode(7);
$k = 9;
$twoSumFourInputIsaBST = new TwoSumFourInputIsaBSTSolution();
print_r($twoSumFourInputIsaBST->findTarget($root, $k));
