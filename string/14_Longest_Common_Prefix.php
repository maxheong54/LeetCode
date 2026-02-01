<?php

/* Write a function to find the longest common prefix string amongst an array of strings.

If there is no common prefix, return an empty string "".

 

Example 1:

Input: strs = ["flower","flow","flight"]
Output: "fl"

Example 2:

Input: strs = ["dog","racecar","car"]
Output: ""
Explanation: There is no common prefix among the input strings.

 

Constraints:

    1 <= strs.length <= 200
    0 <= strs[i].length <= 200
    strs[i] consists of only lowercase English letters if it is non-empty.

 */

function longestCommonPrefix($strs) {
    // $word = $strs[0] ?? '';
    // $wordCounter = count($strs);
    // $len = strlen($word);
    // $longestPrefix = '';

    // for ($i = 1; $i <= $len; $i++) {
    //     $currentPrefix = substr($word, 0, $i);
    //     $currentWordCounter = array_reduce(
    //         $strs,
    //         fn($c, $str) => $c += str_starts_with($str, $currentPrefix) ? 1 : 0,
    //         0
    //     );

    //     if ($currentWordCounter !== $wordCounter) break;

    //     $longestPrefix = $currentPrefix;
    // }

    // return $longestPrefix;
    if (count($strs) === 1) return $strs[0];
    
    sort($strs);
    $first = $strs[0];
    $last = array_pop($strs);
    $len = strlen($first);
    $prefixLen = 0;

    for ($i = 0; $i < $len; $i++) {
        if ($first[$i] !== $last[$i]) break;
        $prefixLen++;
    }

    return substr($first, 0, $prefixLen);
}


var_dump(longestCommonPrefix(["flower","flow","flight"]));