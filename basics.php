<?php
// single line comment


/**
 * multi-line comment
 * 
 */

//  Echo
echo "This is a sample statement";
echo "<br>";
echo "Hello World!";
echo "<h2>This is a heading element.</h2>";
echo "John ", "Joe ", "Naoko";
echo "<br>";

//  Print
print "This is a sample statement";
print "<br>";
print "Hello World!";
print "<h2>This is a heading element.</h2>";
print "John Joe Naoko";



// Concatenation = join/connect arguments

// multiple arguments(,)
echo "John ", "Joe ", "Naoko";
echo "<br>";

// single argument(.)
echo "John " . "Joe " . "Naoko";
echo "<h3>My name is " .  "Naruto" . " Uzumaki " . "</h3>";


// --VARIABLES==
echo "<h2>Variables</h2>";

$naoko = "new student 24";
$ishimaru = "female student 4";
$variable_name = "to store data";

echo "<p>Who is $naoko?</p>";
echo "<p>How old is $ishimaru?</p>";

// --Data Types = values or data---
echo "<h2>Data Types</h2>";
$first_name = "Naruto";
$last_name = "uzumaki";
$age = 27;
$height = 5.9;
$married = false;
$single = true;
$joe = null;

// var_dump() function = is a function that will determine the data or value

// 1. string = text or sequence of characters written in single or double quotes.

echo var_dump($first_name);

// 2 integer = whole numbers(+, -)
echo var_dump($age);

// 3. float = numbers with decimal point
echo var_dump($height);

// 4. boolean = true(1) or false(0)
echo var_dump($married);
echo var_dump($single);

// 5. null = empty or nothing at all
echo var_dump($joe);

// -----OPERATORS-----

echo "<h2>OPERATORS</h2>";
// 1. Arithmetic Operators(+, -, *, /, %)
$num1 = 9;
$num2 = 6;

// Addition(+)
$sum = $num1 + $num2;
echo "<p>Sum: $sum</p>";

// subtraction(-)
$difference = $num1 - $num2;
echo "<p>Difference: $difference</p>";

// multiplication(*)
$product = $num1 * $num2;
echo "<p>Product: $product</p>";

// division(/)
$quotient = $num1 / $num2;
echo "<p>Quotient: $quotient</p>";

// modulo(remainder)(%)
$remainder = $num1 % $num2;
echo "<p>Remainder: $remainder</p>";

// 2. Assignment Operator(=)
echo "<h3>Assignment Operator</h3>";

$x = 5;
$y = 3;

$x = $y;
echo "<p>new value of x: $x</p>";
echo $x = $x + $y;
echo $x += $y; //short hand

// 3. Increment(++) and Decrement(--) operators

echo "<h3>Preincrement Operator</h3>";
$number1 = 10;

echo $number1;
echo ++$number1;
echo ++$number1;

echo "<h3>Postincrement Operator</h3>";
$number2 = 20;

echo $number2;
echo $number2++;
echo $number2++;


echo "<h3>Predecrement Operator</h3>";
$number3 = 10;

echo $number3;
echo --$number3;
echo --$number3;

echo "<h3>Postdecrement Operator</h3>";
$number4 = 20;

echo $number4;
echo $number4--;
echo $number4--;




// 4. Comparison Operators


echo "<h2>comparison Operators</h2>";

$a = 8;
$b = 7;
echo "<h3>Equal To(==)</h3>";

if ($a == $b) {
    echo "Variable a is equal to variable b";
}


echo "<h3>Identical To(===)</h3>";
if ($a === $b) {
    echo "Variable a is identical to variable b";
}


echo "<h3>Not Equal To(!= or <>)</h3>";
if ($a != $b) {
    echo "Variable a is not equal to variable b";
}


// 5. Logical operators
echo "<h2>logical Operators</h2>";

$c = 20;
$d = 15;
$e = 10;
$f = 7;

echo "<h3>&& (AND)</h3>";
if ($c > $d  && $e > $f && $e < $c) {
    echo "True";
}


echo "<h3>|| (OR)</h3>";
if ($c < $d  || $e < $f || $e < $c) {
    echo "True";
}
