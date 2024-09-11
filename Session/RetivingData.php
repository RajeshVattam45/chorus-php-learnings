<?php

// Start a new session or resume the existing one with a unique ID.
session_start();

// Displaying all the session data array.
print_r($_SESSION);
echo '<br>';

echo $_SESSION['user'] . 'Information';
echo '<br>';
echo ' User Name ' . $_SESSION['name'] . ' User Mail : ' . $_SESSION['email'] . ' Password : ' . $_SESSION['password'];
