<?php
//https://leetcode.com/problems/my-calendar-iii/
//A k-booking happens when k events have some non-empty intersection (i.e., there is some time that is common to all k events.)
//
//You are given some events [start, end), after each given event, return an integer k representing the maximum k-booking between all the previous events.
//
//Implement the MyCalendarThree class:
//
//    MyCalendarThree() Initializes the object.
//    int book(int start, int end) Returns an integer k representing the largest integer such that there exists a k-booking in the calendar.

class MyCalendarThreeSolution
{
    /**
     * @var array
     */
    private $map = [];

    /**
     * @param Integer $start
     * @param Integer $end
     * @return Integer
     */
    public function book(int $start, int $end): int
    {
        $this->map[$start] = ($this->map[$start] ?? 0) + 1;
        $this->map[$end] = ($this->map[$end] ?? 0) - 1;

        ksort($this->map);

        $res = 0;
        $sum = 0;
        foreach ($this->map as $key => $val) {
            $sum += $val;
            $res = max($res, $sum);
        }

        return $res;
    }
}





