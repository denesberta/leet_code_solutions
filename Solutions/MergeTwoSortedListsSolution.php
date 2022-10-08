<?php
//https://leetcode.com/problems/merge-two-sorted-lists/
//Merge two sorted linked lists and return it as a sorted list. The list should be made by splicing together the nodes of the first two lists.

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

class MergeTwoSortedListsSolution
{
    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    public function mergeTwoLists(ListNode $list1, ListNode $list2): ListNode
    {
        $head = new ListNode();
        $current = $head;
        while ($list1 && $list2) {
            if ($list1->val < $list2->val) {
                $current->next = $list1;
                $list1 = $list1->next;
            } else {
                $current->next = $list2;
                $list2 = $list2->next;
            }
            $current = $current->next;
        }
        $current->next = $list1 ?? $list2;
        return $head->next;
    }
}

$list1 = new ListNode(1, new ListNode(2, new ListNode(4)));
$list2 = new ListNode(1, new ListNode(3, new ListNode(4)));
$mergeTwoSortedLists = new MergeTwoSortedListsSolution();
print_r($mergeTwoSortedLists->mergeTwoLists($list1, $list2));

