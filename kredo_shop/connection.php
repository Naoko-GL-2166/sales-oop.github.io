<?php

function connection()
{
    // get the details of the database

    // properties of the database
    $server_name = "localhost";
    $username = "root";
    $password = ""; //for Mac user: "root"
    $db_name = "kredo_shop";

    // create a connection
    $conn = new mysqli($server_name, $username, $password, $db_name);
    // $conn holds the connection
    // $conn called an object
    // mysqli() it's called a class(contains different functions and variables)

    // execute / run
    if ($conn->connect_error) {
        //there is  an error
        die("Connection Failed: " . $conn->connect_error);
        // "->"an object operator
        // connect_error contains a string value of the error
        // die()will terminate the current script
    } else {
        // echo "Successfully connected!";
        return $conn;
    }
}

connection();
