<?php



echo "<table border= '1'>";
for ($row = 1; $row <= 10; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 10; $col++) {

        echo "<td>";
        echo $row * $col;

        echo "</td>";
    }
    echo "</tr>";
}

echo "</table>";


// function prod($row, $col)
// {
//     return $row * $col;
// }
