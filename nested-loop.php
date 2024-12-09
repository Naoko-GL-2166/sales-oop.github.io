<?php

// nested loop

//outer loop
for ($row = 1; $row <= 5; $row++) {
    //inner loop
    for ($col = 1; $col <= 3; $col++) {
        echo " Data ";
    }

    echo "<br>";
}


// table element
echo "<h2>display in table element</h2>";
echo "<table border= '1'>";
for ($row = 1; $row <= 7; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 5; $col++) {
        echo "<td>Data</td>";
    }
    echo "</tr>";
}

echo "</table>";
