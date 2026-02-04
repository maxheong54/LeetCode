<?php

require_once __DIR__ . '/../vendor/autoload.php';

/* Given an integer columnNumber, return its corresponding column title as it appears in an Excel sheet.

For example:

A -> 1
B -> 2
C -> 3
...
Z -> 26
AA -> 27
AB -> 28 
...

 

Example 1:

Input: columnNumber = 1
Output: "A"

Example 2:

Input: columnNumber = 28
Output: "AB"

Example 3:

Input: columnNumber = 701
Output: "ZY"

 

Constraints:

    1 <= columnNumber <= 231 - 1 */

function convertToTitle($columnNumber) {
    $result = '';

    while($columnNumber > 0) {
        $columnNumber--;
        $result = chr($columnNumber % 26 + 65) . $result;
        $columnNumber = intdiv($columnNumber, 26);
    }

    return $result;
}

dd(
    convertToTitle(columnNumber: 52)
);