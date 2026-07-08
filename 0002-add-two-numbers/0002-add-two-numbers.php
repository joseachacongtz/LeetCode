/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2, $carry = 0) {
        $sum = $l1->val + $l2->val + $carry;
        if ($sum > 9) {
            $carry = 1;
            $sum -= 10;
        } else {
            $carry = 0;
        }
        if ($l1->next != null || $l2->next != null || $carry == 1) {
            $nextNode = $this->addTwoNumbers($l1->next, $l2->next, $carry);
        }
        $currentNode = new ListNode($sum, $nextNode);
        return $currentNode;
    }
}