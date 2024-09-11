<?php

// Start a new session or resume the existing one with a unique ID.
session_start();

// printing the all session data.
print_r($_SESSION);

$name = $_SESSION['name'];
$email = $_SESSION['email'];

// retriveing the nama and email, displaying.
echo $name . ' ' . $email;

// This function will remove the all the all session varuiables.
session_unset();

// This method will destroye the session.
session_destroy();
