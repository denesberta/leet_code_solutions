<?php
//https://leetcode.com/problems/3sum-closest/
//Given an array nums of n integers and an integer target, find three integers in nums such that the sum is closest to target.
//Return the sum of the three integers.
//You may assume that each input would have exactly one solution.

class ThreeSumClosestSolution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public function threeSumClosest(array $nums, int $target): int
    {
        sort($nums);
        $closest = $nums[0] + $nums[1] + $nums[2];
        $length = count($nums);
        for ($i = 0; $i < $length - 2; $i++) {
            $j = $i + 1;
            $k = $length - 1;
            while ($j < $k) {
                $sum = $nums[$i] + $nums[$j] + $nums[$k];
                if (abs($target - $sum) < abs($target - $closest)) {
                    $closest = $sum;
                }
                if ($sum < $target) {
                    $j++;
                } else {
                    $k--;
                }
            }
        }
        return $closest;
    }
}

$nums = [-1, 2, 1, -4];
$target = 1;
$threeSumClosest = new ThreeSumClosestSolution();
print_r($threeSumClosest->threeSumClosest($nums, $target));

