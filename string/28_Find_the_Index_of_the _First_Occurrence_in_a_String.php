<?php
/* 
Given two strings needle and haystack, return the index of the first occurrence of needle in haystack, or -1 if needle is not part of haystack.

 

Example 1:

Input: haystack = "sadbutsad", needle = "sad"
Output: 0
Explanation: "sad" occurs at index 0 and 6.
The first occurrence is at index 0, so we return 0.

Example 2:

Input: haystack = "leetcode", needle = "leeto"
Output: -1
Explanation: "leeto" did not occur in "leetcode", so we return -1.

 

Constraints:

    1 <= haystack.length, needle.length <= 104
    haystack and needle consist of only lowercase English characters.

 */

// function strStr1($haystack, $needle) {
//     $index = strpos($haystack, $needle);
//     return $index ? $index : -1;
// }

function strStr1($haystack, $needle) {
    $haystackLen = strlen($haystack);
    $needleLen = strlen($needle);
    if ($needleLen > $haystackLen) return -1;
    
    for ($i = 0; $i <= $haystackLen - $needleLen; $i++) {
        $j = 0;

        while ($j < $needleLen && $haystack[$i + $j] === $needle[$j]) {
            $j++;
        }

        if ($j === $needleLen) return $i;
    }

    return -1;
}

// function strStr1($haystack, $needle) {
//     $haystackLen = strlen($haystack);
//     $needleLen = strlen($needle);
//     if ($needleLen > $haystackLen) return -1;
    
//     for ($i = 0; $i < $haystackLen; $i++) {
//         if ($haystack[$i] === $needle[0]) {
//             if ($i + $needleLen > $haystackLen) return -1;
//             $needleIndex = 1;
//             $haystackIndex = $i + 1;
//             $result = $i;
//             while ($needleIndex < $needleLen && $haystackIndex < $haystackLen) {
//                 if ($haystack[$haystackIndex] !== $needle[$needleIndex]) {
//                     $result = -1;
//                 }
//                 $haystackIndex++;
//                 $needleIndex++;
//             }
//             if ($result !== -1) return $result;
//         }
//     }

//     return -1;
// }

var_dump(
    strStr1("sabutsad", "sad")
);