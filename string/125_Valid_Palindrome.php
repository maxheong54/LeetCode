<?php

/* A phrase is a palindrome if, after converting all uppercase letters into lowercase letters and removing all non-alphanumeric characters, it reads the same forward and backward. Alphanumeric characters include letters and numbers.

Given a string s, return true if it is a palindrome, or false otherwise.

 

Example 1:

Input: s = "A man, a plan, a canal: Panama"
Output: true
Explanation: "amanaplanacanalpanama" is a palindrome.

Example 2:

Input: s = "race a car"
Output: false
Explanation: "raceacar" is not a palindrome.

Example 3:

Input: s = " "
Output: true
Explanation: s is an empty string "" after removing non-alphanumeric characters.
Since an empty string reads the same forward and backward, it is a palindrome.

 

Constraints:

    1 <= s.length <= 2 * 105
    s consists only of printable ASCII characters.

 */


function isPalindrome($s) {
    $s = preg_replace("/[^0-9a-z]/i", '', strtolower($s));
    
    return $s === strrev($s);
}
function isPalindrome1($s) {
    $s = preg_replace("/[^0-9a-z]/i", '', strtolower($s));
    
    $i = 0;
    $j = strlen($s) - 1;

    while ($i < $j) {

        if ($s[$i] !== $s[$j]) return false;

        $i++;
        $j--;
    }

    return true;
}


// function isPalindrome($s) {
//     $s = trim(strtolower($s));
    
//     $i = 0;
//     $j = strlen($s) - 1;

//     while ($i < $j) {
//         if (!ctype_alnum($s[$i])) {
//             $i++;
//             continue;
//         }
//         if (!ctype_alnum($s[$j])) {
//             $j--;
//             continue;
//         }

//         if ($s[$i] !== $s[$j]) return false;

//         $i++;
//         $j--;
//     }

//     return true;
// }

var_dump(
    isPalindrome("race a car")
);