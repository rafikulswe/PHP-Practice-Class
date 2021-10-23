<?php 


    $x = 100; // integer number
    $w = 10.5; // decimal/double/float number
    $z = 'Jarif  '; // String
    $decesion = false; // boolean
    $age = 15;
    // echo gettype($decesion);
    echo "<br>";

    // Compound Data type -> array & object
    $name = [$x, $w, $z]; // array
    // echo gettype($name);
    echo "<br>";
    var_dump($name); 
    echo "<br>";

    // Constant variable
    define('authorName', 'Jarif Zawad', true);
    echo AUthorNAME;

    echo "<br>";
    // concat
    echo authorName.' is an author and he is '.$age.' years old';
    echo "<br>";
    echo authorName.' read in class 9 and he is '.$age.' years old';

    // 1. How php works
    // 2. How to run php file in browser
    // 3. How to print any text
    // 4. How to comment in php file
    // 5. Why we use php end tag & when
    // 6. php code will never show in browser
    

    // 7. Variable Declaration Rules
    // start with $ sign
    // variable don't start with 0-9 but number can be used on the last of variable
    // Don't give any spaces in variable declarations
    // 8. Data type in php.
    // Commonly used scalar data type (4)
    // Compound Data type
