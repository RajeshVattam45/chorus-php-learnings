<?php

echo 'Session Management <br>';

// Session is used to store the user related information and data across all the pages in an one web application.
// unlike a cookie, this session will not store the user related data on the user system.
// the data will store on the server.
// it is the best way to store the user related info across the all the pages on web application.


// When the session is started php will check the session is alread exists or not, it session exists then it 
// php will resume the session based on the session ID,
// if the session doesn't exist then session will create with unique ID.

session_start();

// Defying the user Data.
$type = 'User';
$name = 'Rajesh';
$email = 'rajesh2002@gmail.com';
$password = '9019828';

// Store the user data in the session.

$_SESSION['user'] = $type;
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

echo 'Storing the user related data sucessfully';
