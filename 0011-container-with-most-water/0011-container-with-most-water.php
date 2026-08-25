class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        /* First try
        $n = count($height);
        $left_X = 0;
        $left_y = 0;
        $right_x = 0;
        $right_y = 0;
        for($i = 0; $i < $n; $i++) {
            if ($height[$i] * $i >= $right_y * ($right_x)) {
                $right_y = $height[$i];
                $right_x = $i;
            }
        }
        for($i = $n - 1; $i >= 0; $i--) {
            if ($height[$i] * ($n - $i - 1) >= $left_y * ($n - $left_x - 1)) {
                $left_y = $height[$i];
                $left_x = $i;
            }
        }
        $max_y = ($left_y < $right_y) ? $left_y : $right_y;
        return ($right_x - $left_x) * $max_y;*/
        $i = 0;
        $j = count($height) - 1;
        $most_water = 0;
        do {
            $water = ($j - $i) * (($height[$i] < $height[$j]) ? $height[$i] : $height[$j]);
            if ($most_water < $water) {
                $most_water = $water;
            }
            if ($height[$i] < $height[$j]) {
                $i++;
            } else {
                $j--;
            }
        } while($i != $j);
        return $most_water;
    }
}