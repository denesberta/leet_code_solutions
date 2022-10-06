<?php
//https://leetcode.com/problems/running-sum-of-1d-array/
//Given an array nums. We define a running sum of an array as runningSum[i] = sum(nums[0]…nums[i]).

class RunningSumClassSolution
{
    /**
     * @param Integer[] $nums
     */
    public function runningSum($nums): array
    {
        $sum = 0;
        $result = [];
        foreach ($nums as $num) {
            $sum += $num;
            $result[] = $sum;
        }
        return $result;
    }
}

$nums = [1, 2, 3, 4];
$runningSum = new RunningSumClassSolution();
print_r($runningSum->runningSum($nums));
