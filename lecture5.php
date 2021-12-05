<?php

    // Indexes Array
    $fruits = array("Mango", "Banana", "Apple");
    // $fruits = ['Mango', 'Banana', 'Apple'];

    // [0]=> "Mango" 
    // [1]=> "Banana" 
    // [2]=> "Apple"

    // echo $fruits[0];
    // echo $fruits[1];
    // echo $fruits[2];

    // array travers
    // $length = count($fruits);
    // for ($i=0; $i < $length; $i++) { 
    //     echo $fruits[$i].'<br>';
    // }

    // Associative Array
    $fruit_prices = ['Apple' => 120, 'Mango' => 60, 'Orange' => 200];
    
    // echo $fruit_prices['Apple'];
    // print_r($fruit_prices);
    // [Apple] => 120 
    // [Mango] => 60 
    // [Orange] => 200

    foreach ($fruit_prices as $key => $fruit) {
        echo $key.' er price '.$fruit."<br>";
    }
