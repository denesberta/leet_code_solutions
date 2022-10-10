<?php
//https://leetcode.com/problems/break-a-palindrome/
//Given a palindromic string palindrome, replace exactly one character by any lowercase English letter so that the string becomes the lexicographically smallest possible string that isn't a palindrome.
//After doing so, return the final string.  If there is no way to do so, return the empty string.

class BreakAPalindromeSolution
{
    /**
     * @param String $palindrome
     * @return String
     */
    public function breakPalindrome(string $palindrome): string
    {
        $length = strlen($palindrome);
        if ($length === 1) {
            return '';
        }
        $mid = (int)floor($length / 2);
        for ($i = 0; $i < $mid; $i++) {
            if ($palindrome[$i] !== 'a') {
                return substr_replace($palindrome, 'a', $i, 1);
            }
        }
        return substr_replace($palindrome, 'b', $length - 1, 1);
    }
}

$breakAPalindrome = new BreakAPalindromeSolution();
$palindrome = 'abccba';
print_r($breakAPalindrome->breakPalindrome($palindrome));

