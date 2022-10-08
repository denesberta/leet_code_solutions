<?php
//https://leetcode.com/problems/reverse-linked-list/
//Reverse a singly linked list.
//Example:
//Input: 1->2->3->4->5->NULL
//Output: 5->4->3->2->1->NULL

class ListNode
{
    public $val = 0;
    public $next = null;

    public function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class ReverseLinkedListSolution
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    public function reverseList(ListNode $head): ListNode
    {
        $prev = null;
        $current = $head;
        while ($current) {
            $next = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $next;
        }
        return $prev;
    }
}

