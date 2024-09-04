<?php

// Connecting to DB.
$host = 'localhost';
$user = 'root';
$password = '';
$bd = 'mydb';

$conn = new mysqli($host, $user, $password, $bd);

if($conn->connect_error) {
    die('Connect Error');
} else {
   echo 'Connected Sucessfully';
}

// creating table in bt to store the session data.
$insert = 'CREATE TABLE session_data (
Id INT NOT NULL,
userName VARCHAR(20) NOT NULL,
userMail VARCHAR(30) NOT NULL,
userPassword VARCHAR(30) NOT NULL,
PRIMARY KEY (Id)
)';

if ($conn->query($insert) === true) {
    echo 'Inserted Sucess Fully';
}
else {
    echo 'Error';
}
