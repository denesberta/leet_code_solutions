<?php
//https://leetcode.com/problems/increasing-triplet-subsequence/
//Given an integer array nums, return true if there exists a triple of indices (i, j, k) such that i < j < k and nums[i] < nums[j] < nums[k]. If no such indices exists, return false.

class IncreasingTripletSubSequence
{
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    public function increasingTriplet(array $nums): bool
    {
        $first = $second = PHP_INT_MAX;
        foreach ($nums as $num) {
            if ($num <= $first) {
                $first = $num;
            } elseif ($num <= $second) {
                $second = $num;
            } else {
                return true;
            }
        }
        return false;
    }
}

$nums = [1, 2, 3, 4, 5];
$increasingTripletSubSequence = new IncreasingTripletSubSequence();
print_r($increasingTripletSubSequence->increasingTriplet($nums));