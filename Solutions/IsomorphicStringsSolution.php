<?php
//https://leetcode.com/problems/isomorphic-strings/
//Given two strings s and t, determine if they are isomorphic.
//Two strings are isomorphic if the characters in s can be replaced to get t.
//All occurrences of a character must be replaced with another character while preserving the order of characters.
//No two characters may map to the same character but a character may map to itself.

class IsomorphicStringsSolution
{
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    public function isIsomorphic(string $s, string $t): bool
    {
        $s = str_split($s);
        $t = str_split($t);
        $sMap = [];
        $tMap = [];
        foreach ($s as $key => $value) {
            if (!isset($sMap[$value])) {
                $sMap[$value] = $t[$key];
            } else {
                if ($sMap[$value] !== $t[$key]) {
                    return false;
                }
            }
        }
        foreach ($t as $key => $value) {
            if (!isset($tMap[$value])) {
                $tMap[$value] = $s[$key];
            } else if ($tMap[$value] !== $s[$key]) {
                return false;
            }
        }
        return true;
    }
}

$solution = new IsomorphicStringsSolution();
print_r($solution->isIsomorphic("egg", "add")); // true
print_r($solution->isIsomorphic("foo", "bar")); // false
print_r($solution->isIsomorphic("paper", "title")); // true




