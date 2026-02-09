<?php

require_once __DIR__ . '/../vendor/autoload.php';

/* Given two strings s and t, return true if t is an of s, and false otherwise.

 

Example 1:

Input: s = "anagram", t = "nagaram"

Output: true

Example 2:

Input: s = "rat", t = "car"

Output: false

 

Constraints:

    1 <= s.length, t.length <= 5 * 104
    s and t consist of lowercase English letters.
 */



function isAnagram(string $s, string $t): bool {
    $len = strlen($s);
    if (strlen($t) !== $len) return false;

    $chars = count_chars($t, 1);

    for ($i = 0; $i < $len; $i++) {
        $char = ord($s[$i]);
        if (!isset($chars[$char])) return false;

        $chars[$char] -= 1;
        if ($chars[$char] < 0) return false;
    }

    return true;
}

// function isAnagram(string $s, string $t): bool {
//     return count_chars($s, 1) === count_chars($t, 1);
// }

dd(isAnagram('anagram', 'nagaram'));