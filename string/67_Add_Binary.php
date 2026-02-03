<?php
/* 
Given two binary strings a and b, return their sum as a binary string.

 

Example 1:

Input: a = "11", b = "1"
Output: "100"

Example 2:

Input: a = "1010", b = "1011"
Output: "10101"

 

Constraints:

    1 <= a.length, b.length <= 104
    a and b consist only of '0' or '1' characters.
    Each string does not contain leading zeros except for the zero itself.

 */

function addBinary($a, $b) {
    $lenA = strlen($a);
    $lenB = strlen($b);
    $tmp = 0;
    $result = '';

    $indexA = $lenA - 1;
    $indexB = $lenB - 1;

    while ($indexA >= 0 || $indexB >= 0) {
        $sum = $tmp;
        $sum += $indexA >= 0 ? (int) $a[$indexA] : 0;
        $sum += $indexB >= 0 ? (int) $b[$indexB] : 0;

        $tmp = intdiv($sum, 2);
        $result .= $sum % 2;

        $indexA--;
        $indexB--;
    }

    if ($tmp) $result .= $tmp;

    return strrev($result);
}

// function addBinary($a, $b) {
//     $lenA = strlen($a);
//     $lenB = strlen($b);
//     $tmp = 0;
//     $result = [];

//     $indexA = $lenA - 1;
//     $indexB = $lenB - 1;

//     while ($indexA >= 0 || $indexB >= 0) {
//         $numA = $indexA >= 0 ? $a[$indexA] : 0;
//         $nubB = $indexB >= 0 ? $b[$indexB] : 0;

        
//         $sum = ($nubB + $numA + $tmp);
//         $tmp = intdiv($sum, 2);
//         $sum = $sum % 2;

//         array_unshift($result, $sum);

//         $indexA--;
//         $indexB--;
//     }

//     if ($tmp !== 0) array_unshift($result, $tmp);

//     return join($result);
// }

var_dump(
    addBinary('11', '1')
);