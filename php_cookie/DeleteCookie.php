<?php

// Set the cookie to expire in the past to delete it.
setcookie('Rajesh', '', time() - 3600, '/');

// Check if the cookie is still set.
if (isset($_COOKIE['Rajesh'])) {
    echo 'cookie is deleted';
}
else {
    echo 'cookie not exists';
}
