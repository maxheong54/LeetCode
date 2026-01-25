<?php

/* Given a string columnTitle that represents the column title as appears in an Excel sheet, return its corresponding column number.

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

Input: columnTitle = "A"
Output: 1

Example 2:

Input: columnTitle = "AB"
Output: 28

Example 3:

Input: columnTitle = "ZY"
Output: 701

 

Constraints:

    1 <= columnTitle.length <= 7
    columnTitle consists only of uppercase English letters.
    columnTitle is in the range ["A", "FXSHRXW"].

 */

function titleToNumber($columnTitle) {
    $result = 0;
    $i = 0;
    $len = strlen($columnTitle) - 1;

    while ($i <= $len) {
        $currentValue = ord($columnTitle[$i]) - 64;
        $result += $currentValue * (26 ** ($len - $i));
        $i++;
    }

    return $result;
}

var_dump(titleToNumber("ZY"));