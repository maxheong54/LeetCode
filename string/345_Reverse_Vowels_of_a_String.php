<?php

/* Given a string s, reverse only all the vowels in the string and return it.

The vowels are 'a', 'e', 'i', 'o', and 'u', and they can appear in both lower and upper cases, more than once.

 

Example 1:

Input: s = "IceCreAm"

Output: "AceCreIm"

Explanation:

The vowels in s are ['I', 'e', 'e', 'A']. On reversing the vowels, s becomes "AceCreIm".

Example 2:

Input: s = "leetcode"

Output: "leotcede"

 

Constraints:

    1 <= s.length <= 3 * 105
    s consist of printable ASCII characters.

 */

function reverseVowels($s) {
    $vowels = array_flip(['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U']);
    
    $i = 0;
    $j = strlen($s) - 1;

    while ($i < $j) {
        if (array_key_exists($s[$i], $vowels)) {
            if (array_key_exists($s[$j], $vowels)) {
                $t = $s[$i];
                $s[$i] = $s[$j];
                $s[$j] = $t;
                $i++;
                $j--;
                continue;
            } else {
                $j--;
                continue;
            }
        } else {
            $i++;
            continue;
        }
    }

    return $s;
}

$a = [3 => 'hihi', 4 => 'pizda'];
$b = ['zzz', 4 => 'hellodd'];

print_r(reverseVowels('leetcode'));