<?php
$number_list = [1, 9, 5.9, 30, 40, 6.7, 70, 58];

$largest = 0; //receives the largest number after the loop stop


foreach ($number_list as $number) {
    echo $number . " | ";
    if ($largest < $number) {
        $largest = $number;
    }
}

echo "<p>Largest: $largest</p>";
