<?php

// if else if else statement
// $age = 27; //rafi
$age = $_POST["age"];

// // 18 + -> you are mature
// // 13 - 18 -> you are in teenage
// // 1 - 13 you child

if ($age > 18) {
    echo 'You are mature';
} else if ($age > 13 && $age < 18) {
    echo 'you are in teenage';
} else {
    echo 'you child';
}

// 1-32 = F
// 33-49 = D
// 50-59 = C
// 60-69 = B
// 70-79 = A
// 80-100 = A+


// switch statement.

// while loop

// Do while loop

// foreach loop
?>