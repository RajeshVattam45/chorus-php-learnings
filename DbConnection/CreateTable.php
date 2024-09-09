<?php

$server_name = 'localhost';
$user_name = 'root';
$password = '';
$db = 'users_database';

// Create an object for the mysqli, and pass the above 3 values as an arguments.
$conn = new mysqli($server_name, $user_name, $password, $db);

// Check the condition if is true display sucess message else display error message.
if($conn->connect_error) {
    echo 'Error' . $conn->connect_error;
} else {
    echo 'Sucessfully Connected';
}

// Query to create table.
$query = "CREATE TABLE users_table (
    id INT NOT NULL,
    name VARCHAR(30) NOT NULL,
    launguage VARCHAR(30) NOT NULL,
    PRIMARY KEY(id)
    );";

// execuite query.
$result = $conn->query($query);

if($result === true) {
    echo 'Table created sucessfully';
} else {
    echo 'Table not created';
}

