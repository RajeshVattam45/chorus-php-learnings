<?php

// This method check the session it it doesn't exists it will start the session with unique ID,
// if it is exist session resume the with unique ID, 
session_start();

// printing the all session data, but this session data won't display because we are unset the data and
// destroying the data so it will display only empty array. 
print_r($_SESSION);

$name = $_SESSION['name'];
$email = $_SESSION['email'];

// retribing the nama and email, displaying.
echo $name . ' ' . $email;

// This function will remove the all the all session varuiables.
session_unset();

// This method will destroye the session.
session_destroy();


