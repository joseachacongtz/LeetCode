class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x < 0) {
            return false;
        }
        if ($x < 10) {
            return true;
        }
        $y = $x;
        while ($y > 0) {
            $xx = ($xx * 10) + ($y % 10);
            $y = (int) ($y / 10);
        }
        return ($x == $xx) ? true : false;
    }
}