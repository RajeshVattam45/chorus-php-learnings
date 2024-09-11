<?php

echo 'Session Management <br>';

// Start a new session or resume the existing one with a unique ID.
session_start();

// Store the user data in the session.
$_SESSION['user'] = 'User';
$_SESSION['name'] = 'Rajesh';
$_SESSION['email'] = 'rajesh2002@gmail.com';
$_SESSION['password'] = '9019828';

echo 'Storing the user related data sucessfully';
