<?php

// Stored the user related data in SessionCookie.php file, now fetching the user related data within this file.
// Fetching the user data from the SessionCookie.php.
session_start();

// Displaying all the session data.
print_r($_SESSION);
echo '<br>';

echo $_SESSION['user'] . 'Information';
echo '<br>';
echo ' User Name ' . $_SESSION['name'] . ' User Mail : ' . $_SESSION['email'] . ' Password : ' . $_SESSION['password'];
