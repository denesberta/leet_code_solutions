<?php
//https://leetcode.com/problems/time-based-key-value-store/
//Design a time-based key-value data structure that can store multiple values for the same key at different time stamps and retrieve the key's value at a certain timestamp.
class TimeMapSolution
{
    /**
     * @var array
     */
    private $map = [];

    /**
     * @param String $key
     * @param String $value
     * @param Integer $timestamp
     * @return NULL
     */
    public function set($key, $value, $timestamp)
    {
        $this->map[$key][$timestamp] = $value;
    }

    /**
     * @param string $key
     * @param int $timestamp
     * @return string
     */
    public function get(string $key, int $timestamp): string
    {
        if (!isset($this->map[$key])) {
            return "";
        }

        // Iterate on time from 'timestamp' to '1'.
        for ($i = $timestamp; $i >= 1; $i--) {
            if (isset($this->map[$key][$i])) {
                return $this->map[$key][$i];
            }
        }

        // Otherwise no time <= timestamp was stored in key's bucket.
        return "";
    }
}

// Your TimeMap object will be instantiated and called as such:
$obj = new TimeMapSolution();
$obj->set("foo", "bar", 1);  // store the key "foo" and value "bar" along with timestamp = 1.
print_r($obj->get("foo", 1));         // return "bar"
print_r($obj->get("foo", 3));         // return "bar", since there is no value corresponding to foo at timestamp 3 and timestamp 2, then the only value is at timestamp 1 is "bar".
$obj->set("foo", "bar2", 4); // store the key "foo" and value "bar2" along with timestamp = 4.
print_r($obj->get("foo", 4));         // return "bar2"
print_r($obj->get("foo", 5));         // return "bar2"

