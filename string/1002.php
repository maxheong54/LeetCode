<?php

/* Given a string array words, return an array of all characters that show up in all strings within the words (including duplicates). You may return the answer in any order.

 

Example 1:

Input: words = ["bella","label","roller"]
Output: ["e","l","l"]

Example 2:

Input: words = ["cool","lock","cook"]
Output: ["c","o"]

 

Constraints:

    1 <= words.length <= 100
    1 <= words[i].length <= 100
    words[i] consists of lowercase English letters.

 */

function commonChars($words) {
    $countChars = array_map(fn($s) => count_chars($s, 1), $words);
    $intersection = array_intersect_key(...$countChars);
    $result = [];

    foreach ($intersection as $key => $val) {
        $min = $val;
        foreach ($countChars as $arr) {
            if ($arr[$key] < $min) $min = $arr[$key];
        }
        $result = [...$result, ...array_fill(0, $min, chr($key))];
    }

    return $result;
}


var_dump(commonChars(["bbddabab","cbcddbdd","bbcadcab","dabcacad","cddcacbc","ccbdbcba","cbddaccc","accdcdbb"]));