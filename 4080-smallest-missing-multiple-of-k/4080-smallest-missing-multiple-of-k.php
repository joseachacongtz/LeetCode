class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function missingMultiple($nums, $k) {
        sort($nums, SORT_NUMERIC);
        $i = 1;
        foreach($nums as $num) {
            if ($num % $k == 0) {
                if ($k * $i < $num) {
                    return $k * $i;
                } elseif ($k * ($i - 1) != $num) {
                    $i++;
                }
            }
        }
        return $k * $i;
    }
}