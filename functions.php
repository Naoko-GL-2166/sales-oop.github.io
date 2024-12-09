<?php
// built-in Function

$first_name = "Naoko";
$last_name = "Ishimaru";

echo "<h2>My name is " . strtolower($first_name) . strtoupper($last_name) . "</h2>";



// user-defined

// create a function
function displayMassage()
{
    // block of statements/ code
    echo "<h3>Welcome to my blog</h3>";
    echo "<p>Feel free to write your post</p>";
}

function getTotal()
{
    $total = 56 + 34 + 10;
    echo "<p>Total: $total</p>";
}

//Call to function / invocation / execute / run

displayMassage();


getTotal();
getTotal();




// --Function using arguments
// argument = actual data/value
// parameter = placeholder

function getFirstName($parameter)
{
    echo "<p>My first name is $parameter</p>";
}


function computeTotal($x, $y)
{
    $total = $x + $y;
    echo "<p>Total: $total</p>";
}



// pass an argument
$f_name = "joe";
$a = "Naruto";
$first_name = "John";
$b = 40;



getFirstName("Naoko");
getFirstName(50);
getFirstName($f_name);


computeTotal(5, 20);
computeTotal($b, 10);



// Function using RETURN

echo "<h2>Function using RETURN</h2>";

$x = 10;
$y = 5;
$w = 6;
$z = 3;

function addNumber($a, $b)
{
    $sum = $a + $b;
    return $sum;
    return $a + $b;
}

function getMinus($e, $f)
{
    $difference = $e - $f;
    return $difference;
}


// call to function
$add = addNumber($x, $y);
$minus = getMinus($w, $z);


echo $add * $minus;

echo addNumber($x, $y) * getMinus($w, $z);
