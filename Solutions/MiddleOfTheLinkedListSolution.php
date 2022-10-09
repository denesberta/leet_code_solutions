<?php
//https://leetcode.com/problems/middle-of-the-linked-list/
//Given the head of a singly linked list, return the middle node of the linked list.
//If there are two middle nodes, return the second middle node.

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

class MiddleOfTheLinkedListSolution
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    public function middleNode(ListNode $head): ListNode
    {
        $slow = $head;
        $fast = $head;
        while ($fast !== null && $fast->next !== null) {
            $slow = $slow->next;
            $fast = $fast->next->next;
        }
        return $slow;
    }
}

$list = new ListNode(1, new ListNode(2, new ListNode(3, new ListNode(4, new ListNode(5)))));
$middleOfTheLinkedList = new MiddleOfTheLinkedListSolution();
print_r($middleOfTheLinkedList->middleNode($list));

