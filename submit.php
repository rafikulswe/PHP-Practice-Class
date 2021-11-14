<?php

// if else if else statement
// $age = 27; //rafi
// $age = $_POST["age"];

// // 18 + -> you are mature
// // 13 - 18 -> you are in teenage
// // 1 - 13 you child

// if ($age > 18) {
//     echo 'You are mature';
// } else if ($age > 13 && $age < 18) {
//     echo 'you are in teenage';
// } else {
//     echo 'you child';
// }

// 1-32 = F
// 33-49 = D
// 50-59 = C
// 60-69 = B
// 70-79 = A
// 80-100 = A+


// switch statement.

// $grade = $_POST["grade"];

// switch($grade) {
//     case 'A+':
//         echo 'For A+ grade = 80-100';
//         break;

//     case 'A':
//         echo 'For A grade = 70-79';
//         break;

//     case 'A-':
//         echo 'For A- grade = 60-69';
//         break;

//     case 'B':
//         echo 'For B grade = 50-59';
//         break;

//     case 'F':
//         echo 'For F grade = 1-39';
//         break;

//     default:
//         echo 'Your input is invalid';
//         break;
// }


// $mark = (int)($_POST["mark"] / 10);

// 79 / 10 = 7.1 - 7.9 -> 7
// 1-39 = F
// 40-49 = D
// 50-59 = C
// 60-69 = B
// 70-79 = A
// 80-100 = A+

// switch ($mark) {
//     case 8:
//         echo 'For A+ grade';
//         break;

//     case 7:
//         echo 'For A';
//         break;

//     case 6:
//         echo 'For B';
//         break;

//     case 5:
//         echo 'For C';
//         break;

//     case 4:
//         echo 'For D';
//         break;
    
//     default:
//         echo 'invalid mark';
//         break;
// }

$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
$operator = $_POST["operator"];

switch ($operator) {
    case '+':
        echo $number1 + $number2;
        break;
    case '-':
        echo $number1 - $number2;
        break;
    case '*':
        echo $number1 * $number2;
        break;
    case '/':
        echo $number1 / $number2;
        break;
    
    default:
        echo 'invalid operator';
        break;
}

// while loop

// Do while loop

// foreach loop
?>