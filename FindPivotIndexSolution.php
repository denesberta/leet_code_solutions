<?php
//https://leetcode.com/problems/find-pivot-index/
//Given an array of integers nums, write a method that returns the "pivot" index of this array.

class FindPivotIndexSolution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function pivotIndex(array $nums): int
    {
        $sum = array_sum($nums);
        $leftSum = 0;
        foreach ($nums as $i => $num) {
            if ($leftSum === $sum - $leftSum - $num) {
                return $i;
            }
            $leftSum += $num;
        }
        return -1;
    }
}

$pivotIndex = new FindPivotIndexSolution();
$nums = [1, 7, 3, 6, 5, 6];
echo $pivotIndex->pivotIndex($nums);
