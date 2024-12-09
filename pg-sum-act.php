<?php
// // $_GET[''];

// echo "<h2>Full Name:" . $_GET['fullname'] . "</h2>";
// echo "<h2>Email Address:" . $_GET['email'] . "</h2>";


// $full_name = $_GET['fullname'];
// $email = $_GET['email'];



// echo "<h1>My name is $full_name and email is $email.</h2>";


// $_POST[''];

echo "<h2>First Number:" . $_POST['fnumber'] . "</h2>";
echo "<h2>Second Number:" . $_POST['snumber'] . "</h2>";


$first_name = $_POST['fnumber'];
$second_name = $_POST['snumber'];

$sum = $first_name + $second_name;
echo "<h2>Sum: $sum</h2>";
