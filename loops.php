<?php

// While Loops
echo "<h2>While Loop</h2>";
$num1 = 1; //initial counter

while ($num1 <= 5) {
    //loop body statement
    echo "<p>$num1 is less than or equal to 5</p>";

    $num1++; //update statement
}


// While Loops
echo "<h2>Do While Loop</h2>";

$num2 = 6; //initial counter

do {
    // loop body statement
    echo "<p>$num2 is less than or equal to 5</p>";

    $num2++; //update statement

} while ($num2 <= 5);



// For Loops
echo "<h2>For Loop</h2>";



/**
 * syntax
 *         for(initial_counter; condition; update_statement){
 *                     loop body statement
 * }
 */

for ($i = 1; $i <= 5; $i++) {
    echo "<p>$i is less than or equal to 5</p>";
}

echo "<h3>Decrements</h3>";

for ($i = 5; $i >= 1; $i--) {
    echo "<p>$i is greater than or equal to 1</p>";
}
