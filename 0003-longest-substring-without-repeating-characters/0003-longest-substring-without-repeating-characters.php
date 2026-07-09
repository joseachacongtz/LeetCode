class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        if (strlen($s) == 0) {
            return 0;
        }
        $currentLen = 0;
        $currentChars = array();
        for($i = $currentLen; $i < strlen($s); $i++) {
            if (in_array($s[$i], $currentChars)) {
                if ($currentLen > $maxLen) {
                    $maxLen = $currentLen;
                }
                $position = array_search($s[$i], $currentChars);
                for ($j = 0; $j <= $position; $j++) { 
                    array_shift($currentChars);
                }
                $currentChars[] = $s[$i];
                $currentLen = count($currentChars);
            } else {
                $currentChars[] = $s[$i];
                $currentLen++;
            }
        }
        return ($currentLen > $maxLen) ? $currentLen : $maxLen;
    }
}