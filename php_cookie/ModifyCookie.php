<?php

$new_cookie_value = 'Rajesh_new@gmail.com';

// Update the cookie.
setcookie('Rajesh', $new_cookie_value, time() + 3600, '/');

// Check if the updated cookie is set.
if (isset($_COOKIE['Rajesh'])) {
    echo 'cookie is updated: ' . $_COOKIE['Rajesh'];
}
else {
    echo 'cookie not updated';
}
