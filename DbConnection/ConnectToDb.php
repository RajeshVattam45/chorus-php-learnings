<?php

// connect with MySqul server.
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
    echo 'Sucessfully Connected To DataBase';
}