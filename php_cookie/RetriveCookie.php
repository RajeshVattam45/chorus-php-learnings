<?php

// Check if the cookie exists.
if (isset($_COOKIE['Rajesh'])) {
    echo 'cookie is retrieved: ' . $_COOKIE['Rajesh'];
}
else {
    echo 'cookie not set';
}
