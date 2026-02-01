<?php
/* 
Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.

An input string is valid if:

    Open brackets must be closed by the same type of brackets.
    Open brackets must be closed in the correct order.
    Every close bracket has a corresponding open bracket of the same type.

 

Example 1:

Input: s = "()"

Output: true

Example 2:

Input: s = "()[]{}"

Output: true

Example 3:

Input: s = "(]"

Output: false

Example 4:

Input: s = "([])"

Output: true

Example 5:

Input: s = "([)]"

Output: false

 

Constraints:

    1 <= s.length <= 104
    s consists of parentheses only '()[]{}'.

 */

function isValid($s) {
    $map = ['(' => ')', '[' => ']', '{' => '}'];
    $len = strlen($s);

    if ($len % 2 !== 0) return false;

    $buffer = [];

    for ($i = 0; $i < $len; $i++) {
        $char = $s[$i];
        if (isset($map[$char])) {
            $buffer[] = $map[$char];
        } else {
            if (array_pop($buffer) !== $char) return false;
        }
    }

    return empty($buffer);
}

// function isValid($s) {
//     $brackets = [];

//     $len = strlen($s);
//     for ($i = 0; $i < $len; $i++) {
//         $char = $s[$i];
//         switch ($char) {
//             case '(':
//             case '[':
//             case '{':
//                 $brackets[] = $char;
//                 break;
//             case ')':
//                 if (array_pop($brackets) !== '(') return false;
//                 break;
//             case ']':
//                 if (array_pop($brackets) !== '[') return false;
//                 break;
//             case '}':
//                 if (array_pop($brackets) !== '{') return false;
//                 break;
//         }
//     }
//     return empty($brackets);
// }


var_dump(
    isValid("[(])")
);