<?php 

/* Given an array of strings words, return the words that can be typed using letters of the alphabet on only one row of American keyboard like the image below.

Note that the strings are case-insensitive, both lowercased and uppercased of the same letter are treated as if they are at the same row.

In the American keyboard:

    the first row consists of the characters "qwertyuiop",
    the second row consists of the characters "asdfghjkl", and
    the third row consists of the characters "zxcvbnm".
Example 1:

Input: words = ["Hello","Alaska","Dad","Peace"]

Output: ["Alaska","Dad"]

Explanation:

Both "a" and "A" are in the 2nd row of the American keyboard due to case insensitivity.

Example 2:

Input: words = ["omk"]

Output: []

Example 3:

Input: words = ["adsdf","sfd"]

Output: ["adsdf","sfd"]

 

Constraints:

    1 <= words.length <= 20
    1 <= words[i].length <= 100
    words[i] consists of English letters (both lowercase and uppercase). 
 */

const ROW_MAP = [
    // row 1
    'q' => 1, 'w' => 1, 'e' => 1, 'r' => 1, 't' => 1,
    'y' => 1, 'u' => 1, 'i' => 1, 'o' => 1, 'p' => 1,
    'Q' => 1, 'W' => 1, 'E' => 1, 'R' => 1, 'T' => 1,
    'Y' => 1, 'U' => 1, 'I' => 1, 'O' => 1, 'P' => 1,

    // row 2
    'a' => 2, 's' => 2, 'd' => 2, 'f' => 2, 'g' => 2,
    'h' => 2, 'j' => 2, 'k' => 2, 'l' => 2,
    'A' => 2, 'S' => 2, 'D' => 2, 'F' => 2, 'G' => 2,
    'H' => 2, 'J' => 2, 'K' => 2, 'L' => 2,

    // row 3
    'z' => 3, 'x' => 3, 'c' => 3, 'v' => 3, 'b' => 3,
    'n' => 3, 'm' => 3,
    'Z' => 3, 'X' => 3, 'C' => 3, 'V' => 3, 'B' => 3,
    'N' => 3, 'M' => 3,
];

function findWords($words) {
    return array_filter($words, fn($word) => canBeTypeOneRow($word));
}

function canBeTypeOneRow($word) {
    $row1 = "qwertyuiop";
    $row2 = "asdfghjkl";
    $row3 = "zxcvbnm";

    $flags = ['row1' => 0, 'row2' => 0, 'row3' => 0];

    $len = strlen($word);

    for ($i = 0; $i < $len; $i++) {
        if (stripos($row1, $word[$i]) !== false) $flags['row1'] = 1;
        if (stripos($row2, $word[$i]) !== false) $flags['row2'] = 1;
        if (stripos($row3, $word[$i]) !== false) $flags['row3'] = 1;
    }

    return array_sum($flags) === 1; 
}


$words = ["Hello","Alaska","Dad","Peace"];
var_dump(findWords($words));