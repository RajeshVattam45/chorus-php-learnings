<?php

// include_once 'Connect.php';
session_start();

// Connecting to DB.
$host = 'localhost';
$user = 'root';
$password = '';
$bd = 'mydb';

$conn = new mysqli($host, $user, $password, $bd);

if($conn->connect_error) {
    die('Connect Error');
} else {
   echo 'Connected Sucessfully <br>';
}

// // creating table in bt to store the session data.
// $insert = 'CREATE TABLE session_data (
// Id INT NOT NULL ,
// userName VARCHAR(20) NOT NULL,
// userMail VARCHAR(30) NOT NULL,
// userPassword VARCHAR(30) NOT NULL,
// PRIMARY KEY (Id)
// )';

// if ($conn->query($insert) === true) {
//     echo 'Inserted Sucess Fully';
// }
// else {
//     echo 'Error';
// }

// Retriving the user data.
$use_name = $_SESSION['name'];
$user_mail = $_SESSION['email'];
$user_pass = $_SESSION['password'];

// Preparing the SQL statement
$insert = $conn->prepare("INSERT INTO session_data (userName, userMail, userPassword) VALUES (?, ?, ?)");
if ($insert === false) {
    die('Prepare failed: ' . $conn->error);
}

// Bind the perameters.
$insert->bind_param("sss", $use_name, $user_mail, $user_pass);

if($insert->execute()){
    echo 'Inserted Data Sucessfully';
}
else {
    echo 'error';
}

$insert->close();
$conn->close();
