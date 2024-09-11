<?php

session_start();
echo 'Updateting session / adding one more value to session <br> <br>';

// Adding two fields to session and printing/displaying data.
$_SESSION['role'] = 'Admin';
$_SESSION['color'] = 'Yellow';

echo 'After adding 2 values printing the session data <br> <br>';
print_r($_SESSION);
