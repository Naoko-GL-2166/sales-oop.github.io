<?php
// if statement

// nested if
$num1 = 130;
$num2 = 200;
$num3 = 350;

if ($num2 > $num1) {
    if ($num2 > $num3) {
        echo "variable num2 is the greatest number: $num2";
    }
}



// logical operator
if ($num1 > $num2 && $num1 > $num3) {
    echo "variable num1 is the greatest number: $num1";
}


// if else statement
echo "<h2>if else statement</h2>";
if ($num2 > $num1) {
    if ($num2 > $num3) {
        echo "variable num2 is the greatest number: $num2";
    } else {
        echo "variable num2 is less than num3";
    }
} else {
    echo "variable num2 is less than num1";
}




// if elseif else
echo "<h2>if elseif else statement</h2>";


/**
 * below 18 - teenager
 * 18 to 30 - young adult
 * 31 to 59 - middle aged person
 * 60 above - not so young anymore
 */

$age = 61;

if ($age < 18) {
    echo "Teenager";
} elseif ($age > 18 && $age <= 30) {
    echo "Young adult";
} elseif ($age >= 31 && $age <= 59) {
    echo "Middle aged person";
} else {
    echo "Not so young anymore";
}
