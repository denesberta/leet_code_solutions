<?php
//https://leetcode.com/problems/is-subsequence/
//Given a string s and a string t, check if s is subsequence of t or false otherwise.
//A subsequence of a string is a new string which is formed from the original string by deleting some (can be none) of the characters without disturbing the relative positions of the remaining characters. (ie, "ace" is a subsequence of "abcde" while "aec" is not).

class IsSubsequenceSolution
{
    /**
     * @param string $s
     * @param string $t
     * @return bool
     */
    public function isSubsequence(string $s, string $t): bool
    {
        $sLength = strlen($s);
        $tLength = strlen($t);
        $i = 0;
        $j = 0;
        while ($i < $sLength && $j < $tLength) {
            if ($s[$i] === $t[$j]) {
                $i++;
            }
            $j++;
        }
        return $i === $sLength;
    }
}

$solution = new IsSubsequenceSolution();
print_r($solution->isSubsequence("abc", "ahbgdc")); // true
print_r($solution->isSubsequence("axc", "ahbgdc")); // false






