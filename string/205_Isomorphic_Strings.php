<?php

require_once __DIR__ . '/../vendor/autoload.php';

/* 
Given two strings s and t, determine if they are isomorphic.

Two strings s and t are isomorphic if the characters in s can be replaced to get t.

All occurrences of a character must be replaced with another character while preserving the order of characters. No two characters may map to the same character, but a character may map to itself.

 

Example 1:

Input: s = "egg", t = "add"

Output: true

Explanation:

The strings s and t can be made identical by:

    Mapping 'e' to 'a'.
    Mapping 'g' to 'd'.

Example 2:

Input: s = "f11", t = "b23"

Output: false

Explanation:

The strings s and t can not be made identical as '1' needs to be mapped to both '2' and '3'.

Example 3:

Input: s = "paper", t = "title"

Output: true

 

Constraints:

    1 <= s.length <= 5 * 104
    t.length == s.length
    s and t consist of any valid ascii character.

 */

function isIsomorphic($s, $t) {
    $len = strlen($s);
    if (strlen($t) !== $len) return false;

    $mapST = [];
    $mapTS = [];

    for ($i = 0; $i < $len; $i++) {
        $a = $s[$i];
        $b = $t[$i];

        if (!isset($mapST[$a]) && !isset($mapTS[$b])) {
            $mapST[$a] = $b;
            $mapTS[$b] = $a;
            continue;
        }

        if (($mapST[$a] ?? null) !== $b || ($mapTS[$b] ?? null) !== $a) {
            return false;
        }
    }

    return true;
}

// function isIsomorphic($s, $t) {
//     if (strlen($s) !== strlen($t)) return false;

//     $map = [];

//     for ($i = 0, $len = strlen($s); $i < $len; $i++) {
//         if (!isset($map[$s[$i]])) {
//             if (in_array($t[$i], $map)) return false;
//             $map[$s[$i]] = $t[$i];
//         }

//         if ($map[$s[$i]] !== $t[$i]) return false;
//     }

//     return true;
// }

dd(
    isIsomorphic('abbbbbbbbb', 'ceee')
);