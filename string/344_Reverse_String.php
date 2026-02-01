<?php

/* Write a function that reverses a string. The input string is given as an array of characters s.

You must do this by modifying the input array in-place with O(1) extra memory.

 

Example 1:

Input: s = ["h","e","l","l","o"]
Output: ["o","l","l","e","h"]

Example 2:

Input: s = ["H","a","n","n","a","h"]
Output: ["h","a","n","n","a","H"]

 

Constraints:

    1 <= s.length <= 105
    s[i] is a printable ascii character.

 */

function reverseString(&$s) {
    // $first = 0;
    // $last = count($s) - 1;

    // while ($first < $last) {
    //     $temp = $s[$first];
    //     $s[$first] = $s[$last];
    //     $s[$last] = $temp;
    //     $first++;
    //     $last--;
    // }

    for($i = 0, $j = count($s) -1; $i < $j; $i++, $j--) {
        [$s[$i], $s[$j]] = [$s[$j], $s[$i]];
    }
}

$s = ["H","a","n","n","a","h"];

reverseString($s);
var_dump($s);
