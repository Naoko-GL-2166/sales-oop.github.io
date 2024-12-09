<?php
// Two types of array
// 1. indexed
// 2. associative

// Indexed Array
// shortsyntax
$fruits = ['mango', 'apple', 'banana', 'orange', 'pinapple'];



// language construct
// $fruits = array('mango', 'apple', 'banana', 'orange', 'pinapple');


// helpful function
print_r($fruits); //display the keys and values of an array and for read-only information

echo "<br>";

echo count($fruits); //return the size(number of values) of an array


// Assign Using Index
$fruit[0] = "lemon";
$fruit[1] = "strawberry";
$fruit[5] = "peach";

// Display an individual value
echo "<h2>Display an individual value</h2>";
echo $fruits[1];
echo $fruits[4];
echo $fruits[0];

// Display All
// loop--->foreach()
foreach ($fruits as $naoko) {
    echo "<h3>$naoko</h3>";
}
